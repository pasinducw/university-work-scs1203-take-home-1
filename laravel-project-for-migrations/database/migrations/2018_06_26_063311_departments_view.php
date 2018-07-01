<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepartmentsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW departments_view AS
            SELECT
                department.department_id as department_id,
                department.name as name, department.location as location,
                department.phone as phone, 
                concat(head.first_name, ' ', head.last_name) as department_head_name
            FROM departments as department
            LEFT JOIN professors_view as head ON 
                (head.employee_id = department.department_head_id)
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW departments_view");
    }
}
