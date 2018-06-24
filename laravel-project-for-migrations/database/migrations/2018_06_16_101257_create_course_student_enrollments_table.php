<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student_enrollments', function (Blueprint $table) {
            $table->string('course_id')->nullable(false);
            $table->string('student_id')->nullable(false);

            $table->string('grade');

            $table->primary(['course_id', 'student_id'], 'pk_course_student_enrollments');
            $table->foreign('course_id', 'fk_course_student_enrollments_to_courses')
                ->references('course_id')
                ->on('courses')
                ->onDelete('restrict');

            $table->foreign('student_id', 'fk_course_student_enrollments_to_students')
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
        Schema::dropIfExists('course_student_enrollments');
    }
}
