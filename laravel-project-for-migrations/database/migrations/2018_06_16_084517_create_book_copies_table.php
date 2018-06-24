<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_copies', function (Blueprint $table) {
            $table->unsignedInteger('book_copy_id')->nullable(false)->autoIncrement();
            $table->string('book_id')->nullable(false);
            $table->string('borrowed_student_id');

            $table->foreign('book_id', 'fk_book_copies_to_books')
                ->references('book_id')
                ->on('books')
                ->onDelete('restrict');

            $table->foreign('borrowed_student_id', 'fk_book_copies_to_students')
                ->references('student_id')
                ->on('students')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_copies');
    }
}
