<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->string('author_name')->nullable(false);
            $table->primary('author_name', 'pk_authors');
            $table->string('professor_id')->nullable(true);

            $table->foreign('professor_id', 'fk_authors_to_professors')
                ->references('employee_id')
                ->on('professors')
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
        Schema::dropIfExists('authors');
    }
}
