<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_sessions', function (Blueprint $table) {
            $table->string('course_id')->nullable(false);
            $table->string('section_id')->nullable(false);
            $table->unsignedInteger('semester')->nullable(false);
            $table->unsignedInteger('year')->nullable(false);
            $table->string('topic');
            $table->string('conductor_id')->nullable(true);

            $table->time('start_time');
            $table->time('end_time');
            $table->string('location');

            $table->primary(['course_id', 'section_id', 'semester', 'year', 'topic'], 'pk_lab_sessions');
            $table->foreign(['course_id', 'section_id', 'semester', 'year'], 'fk_lab_sessions_to_sections')
                ->references(['course_id', 'section_id', 'semester', 'year'])
                ->on('sections')
                ->onDelete('restrict');
            $table->foreign('conductor_id', 'fk_lab_sessions_to_postgraduates')
                ->references('student_id')
                ->on('postgraduates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_sessions');
    }
}
