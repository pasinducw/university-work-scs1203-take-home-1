<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW students_view AS
            SELECT
                user.first_name as first_name, user.last_name as last_name,
                user.phone as phone, student.address as address, 
                student.student_id as student_id, 
                student_level.role as level
            FROM users as user
            INNER JOIN students as student ON student.user_id = user.user_id
            INNER JOIN (
                SELECT 'undergraduate' as role, ug.student_id as student_id FROM undergraduates as ug
                UNION
                SELECT 'postgraduate' as role, pg.student_id as student_id FROM postgraduates as pg
            ) as student_level ON student_level.student_id = student.student_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW students_view");
    }
}
