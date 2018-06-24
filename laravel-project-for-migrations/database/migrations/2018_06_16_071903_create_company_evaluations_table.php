<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_evaluations', function (Blueprint $table) {
            $table->string('ungergraduate_id')->nullable(false);
            $table->unsignedInteger('company_evaluation_year')->nullable(false);
            $table->unsignedInteger('company_evaluation_semester')->nullable(false);
            $table->string('company_name')->nullable(false);
            $table->text('evaluation')->nullable(false);

            $table->primary(['ungergraduate_id', 'company_evaluation_year', 'company_evaluation_semester'], 'pk_company_evaluations');
            $table->foreign('ungergraduate_id', 'fk_company_evaluations_to_students')
                ->references('student_id')
                ->on('undergraduates')
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
        Schema::dropIfExists('company_evaluations');
    }
}
