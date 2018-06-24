<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePrerequisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_prerequisites', function (Blueprint $table) {
            $table->string('course_id')->nullable(false);
            $table->string('depending_course_id')->nullable(false);

            $table->primary(['course_id', 'depending_course_id'], 'pk_course_prerequisites');
            $table->foreign('course_id', 'fk_course_prerequisites_to_depender')
                ->references('course_id')
                ->on('courses')
                ->onDelete('cascade');

            $table->foreign('depending_course_id', 'fk_course_prerequisites_to_depending')
                ->references('course_id')
                ->on('courses')
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
        Schema::dropIfExists('course_prerequisites');
    }
}
