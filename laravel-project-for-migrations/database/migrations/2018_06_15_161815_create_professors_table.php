<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->string('employee_id')->nullable(false);
            $table->string('department_id')->nullable(false);
            $table->string('author_name')->nullable(true);

            $table->primary('employee_id', 'pk_professiors');
            $table->foreign('employee_id')
                ->references('employee_id')
                ->on('employees')
                ->onDelete('cascade');

            $table->foreign('department_id', 'fk_professors_to_departments')
                ->references('department_id')
                ->on('departments')
                ->onDelete('restrict');

            $table->foreign('author_name', 'fk_professors_to_authors')
                ->references('author_name')
                ->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professors');
    }
}
