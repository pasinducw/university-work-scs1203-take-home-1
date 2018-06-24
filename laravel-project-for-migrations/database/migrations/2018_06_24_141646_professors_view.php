<?php

use Illuminate\Database\Migrations\Migration;

class ProfessorsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW professors_view AS
          SELECT
            department.name as department,
            user.user_id as user_id, user.first_name as first_name, user.last_name as last_name,
            user.phone as phone,
            employee.employee_id as employee_id,
            professor.department_id as department_id, professor.author_name as author_name
          FROM users AS user
          INNER JOIN employees as employee ON employee.user_id = user.user_id
          INNER JOIN professors as professor ON professor.employee_id = employee.employee_id
          INNER JOIN departments as department ON department.department_id = professor.department_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW professors_view");
    }
}
