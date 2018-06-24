<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostgraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postgraduates', function (Blueprint $table) {
            $table->string('student_id')->nullable(false);

            $table->primary('student_id', 'pk_postgraduates');
            $table->foreign('student_id', 'fk_postgraduates_to_students')
                ->references('student_id')
                ->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postgraduates');
    }
}
