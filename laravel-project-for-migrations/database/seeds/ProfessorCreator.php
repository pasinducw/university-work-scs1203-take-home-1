<?php

use Illuminate\Database\Seeder;

class ProfessorCreator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'employee_id' => 'emp1',
            'user_id' => 1,
        ]);

        DB::table('professors')->insert([
            'employee_id' => 'emp1',
            'department_id' => 'ucsc',
        ]);
    }
}
