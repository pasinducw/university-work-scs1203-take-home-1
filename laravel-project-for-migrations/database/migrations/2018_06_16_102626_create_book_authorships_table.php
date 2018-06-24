<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookAuthorshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_authorships', function (Blueprint $table) {
            $table->string('book_id')->nullable(false);
            $table->string('author_name')->nullable(false);

            $table->primary(['book_id', 'author_name'], 'pk_book_authorships');

            $table->foreign('book_id', 'fk_book_authorships_to_books')
                ->references('book_id')
                ->on('books')
                ->onDelete('cascade');

            $table->foreign('author_name', 'fk_book_authorships_to_authors')
                ->references('author_name')
                ->on('authors')
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
        Schema::dropIfExists('book_authorships');
    }
}
