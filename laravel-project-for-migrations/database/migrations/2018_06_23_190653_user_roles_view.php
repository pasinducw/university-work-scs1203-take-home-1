<?php

use Illuminate\Database\Migrations\Migration;

class UserRolesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW user_roles_view AS
          SELECT user.user_id as user_id,
            user.is_admin as is_admin,
            student.user_id IS NOT NULL AS is_student , employee.user_id IS NOT NULL AS is_employee,
            professor.employee_id IS NOT NULL AS is_professor,
            manager.employee_id IS NOT NULL AS is_manager,
            librarian.employee_id IS NOT NULL AS is_librarian
          FROM users AS user
          LEFT JOIN students as student ON user.user_id = student.user_id
          LEFT JOIN employees as employee ON user.user_id = employee.user_id
          LEFT JOIN professors as professor ON employee.employee_id = professor.employee_id
          LEFT JOIN managers as manager ON employee.employee_id = manager.employee_id
          LEFT JOIN librarians as librarian ON employee.employee_id = librarian.employee_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW user_roles_view");
    }
}
