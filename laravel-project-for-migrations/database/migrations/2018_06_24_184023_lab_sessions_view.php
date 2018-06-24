<?php

use Illuminate\Database\Migrations\Migration;

class LabSessionsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW lab_sessions_view AS
            SELECT
                department.name as department, department.department_id as department_id,
                course.course_id as course_id, course.name as course_name,
                section.section_id as section_id, section.year as year, section.semester as semester,
                section.professor_id as professor_id,
                lab_session.topic as topic, lab_session.start_time as start_time, lab_session.end_time as end_time,
                lab_session.location as location, lab_session.conductor_id as conductor_id

            FROM departments as department
            INNER JOIN courses as course ON (course.department_id = department.department_id)
            INNER JOIN sections as section ON (section.course_id = course.course_id)
            INNER JOIN lab_sessions as lab_session ON (
                lab_session.course_id = course.course_id AND
                lab_session.section_id = section.section_id AND
                lab_session.semester = section.semester AND
                lab_session.year = section.year)
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW lab_sessions_view");
    }
}
