<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BooksView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW books_view AS
            SELECT
                book.book_id as book_id, book.title as title, 
                book.publisher as publisher, book.year as year, 
                book.copies as copies,
                GROUP_CONCAT(authorship.author_name ORDER BY authorship.author_name SEPARATOR ', ') AS authors
            FROM books as book
            LEFT JOIN book_authorships as authorship ON (authorship.book_id = book.book_id)
            GROUP BY book.book_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW books_view");
    }
}
