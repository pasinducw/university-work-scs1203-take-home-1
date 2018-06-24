<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->string('course_id')->nullable(false);
            $table->string('section_id')->nullable(false);
            $table->unsignedInteger('semester')->nullable(false);
            $table->unsignedInteger('year')->nullable(false);
            $table->string('professor_id')->nullable(true);

            $table->primary(['course_id', 'section_id', 'semester', 'year'], 'pk_sections');
            $table->foreign('course_id', 'fk_sections_to_courses')
                ->references('course_id')
                ->on('courses')
                ->onDelete('restrict');
            $table->foreign('professor_id', 'fk_sections_to_professors')
                ->references('employee_id')
                ->on('professors')
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
        Schema::dropIfExists('sections');
    }
}
