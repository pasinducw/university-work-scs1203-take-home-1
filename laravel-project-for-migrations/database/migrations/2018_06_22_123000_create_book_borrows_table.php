<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_borrows', function (Blueprint $table) {
            $table->string('book_id')->nullable(false);
            $table->string('student_id')->nullable(false);
            $table->boolean('returned')->default(false);

            $table->foreign('book_id', 'fk_book_borrows_to_books')
                ->references('book_id')
                ->on('books')
                ->onDelete('cascade');

            $table->foreign('student_id', 'fk_book_borrows_to_students')
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
        Schema::dropIfExists('book_borrows');
    }
}
