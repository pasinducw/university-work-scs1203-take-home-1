<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextbooksView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW textbooks_view AS
            SELECT
                book.book_id as book_id, book.title as title, 
                book.publisher as publisher, book.year as year, 
                book.authors as authors, course.name as course,
                professor.first_name as professor
            FROM textbooks as textbook
            INNER JOIN books_view as book ON (textbook.book_id = book.book_id)
            INNER JOIN professors_view as professor ON (professor.employee_id = textbook.professor_id)
            INNER JOIN courses as course ON (course.course_id = textbook.course_id)
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW textbooks_view");
    }
}
