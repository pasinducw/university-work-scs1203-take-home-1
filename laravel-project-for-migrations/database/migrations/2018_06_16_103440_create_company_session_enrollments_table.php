<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySessionEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_session_enrollments', function (Blueprint $table) {
            $table->unsignedInteger('company_session_year')->nullable(false);
            $table->unsignedInteger('company_session_semester')->nullable(false);
            $table->string('undergraduate_id')->nullable(false);

            $table->primary(['company_session_year', 'company_session_semester', 'undergraduate_id'], 'pk_company_session_enrollments');

            $table->foreign('undergraduate_id', 'fk_company_session_enrollments_to_undergraduates')
                ->references('student_id')
                ->on('undergraduates')
                ->onDelete('cascade');

            $table->foreign(['company_session_year', 'company_session_semester'], 'fk_company_session_enrollments_to_company_sessions')
                ->references(['company_session_year', 'company_session_semester'])
                ->on('company_sessions')
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
        Schema::dropIfExists('company_session_enrollments');
    }
}
