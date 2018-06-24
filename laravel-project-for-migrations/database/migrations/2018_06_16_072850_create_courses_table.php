<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('course_id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('department_id')->nullable(false);
            $table->unsignedInteger('credit_hours');
            $table->string('college')->default('None');

            $table->primary('course_id', 'pk_courses');
            $table->foreign('department_id', 'fk_courses_to_departments')
                ->references('department_id')
                ->on('departments')
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
        Schema::dropIfExists('courses');
    }
}
