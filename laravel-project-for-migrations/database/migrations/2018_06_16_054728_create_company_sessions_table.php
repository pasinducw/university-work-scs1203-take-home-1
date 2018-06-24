<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_sessions', function (Blueprint $table) {
            $table->unsignedInteger('company_session_year');
            $table->unsignedInteger('company_session_semester');
            $table->string('manager_id')->nullable(false);

            $table->primary(['company_session_year', 'company_session_semester'], 'pk_company_sessions');
            $table->foreign('manager_id', 'fk_company_sessions_to_managers')
                ->references('employee_id')
                ->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_sessions');
    }
}
