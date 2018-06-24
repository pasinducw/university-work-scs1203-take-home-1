<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textbooks', function (Blueprint $table) {
            $table->string('professor_id')->nullable(false);
            $table->string('book_id')->nullable(false);
            $table->string('course_id')->nullable(true);

            // book id not included in the primary key
            $table->primary(['professor_id', 'course_id'], 'pk_textbooks');

            $table->foreign('professor_id', 'fk_textbooks_to_professors')
                ->references('employee_id')
                ->on('professors')
                ->onDelete('cascade');

            $table->foreign('course_id', 'fk_textbooks_to_courses')
                ->references('course_id')
                ->on('courses')
                ->onDelete('cascade');

            $table->foreign('book_id', 'fk_textbooks_to_books')
                ->references('book_id')
                ->on('books')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('textbooks');
    }
}
