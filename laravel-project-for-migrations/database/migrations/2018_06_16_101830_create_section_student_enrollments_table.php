<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionStudentEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_student_enrollments', function (Blueprint $table) {
            $table->string('course_id')->nullable(false);
            $table->string('section_id')->nullable(false);
            $table->unsignedInteger('semester')->nullable(false);
            $table->unsignedInteger('year')->nullable(false);

            $table->string('student_id')->nullable(false);

            $table->primary(['course_id', 'section_id', 'semester', 'year', 'student_id'], 'pk_section_student_enrollments');

            $table->foreign(['course_id', 'section_id', 'semester', 'year'], 'fk_section_student_enrollments_to_sections')
                ->references(['course_id', 'section_id', 'semester', 'year'])
                ->on('sections')
                ->onDelete('restrict');

            $table->foreign('student_id', 'fk_section_student_enrollments_to_students')
                ->references('student_id')
                ->on('students')
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
        Schema::dropIfExists('section_student_enrollments');
    }
}
