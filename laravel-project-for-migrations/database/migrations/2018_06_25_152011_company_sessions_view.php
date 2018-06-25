<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanySessionsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW company_sessions_view AS
            SELECT
                session.company_session_year as year, session.company_session_semester as semester,
                session.manager_id as manager_id, 
                count(enrollment.undergraduate_id) as enrollments
            FROM company_sessions as session
            LEFT JOIN company_session_enrollments as enrollment ON 
                (enrollment.company_session_year = session.company_session_year AND enrollment.company_session_semester = session.company_session_semester)
            GROUP BY session.company_session_year, session.company_session_semester
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW company_sessions_view");
    }
}
