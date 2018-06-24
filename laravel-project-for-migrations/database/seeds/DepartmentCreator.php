<?php

use Illuminate\Database\Seeder;

class DepartmentCreator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'department_id' => 'ucsc',
            'name' => 'UCSC',
            'location' => str_random(10),
            'phone' => str_random(10),
        ]);

        DB::table('departments')->insert([
            'department_id' => 'science',
            'name' => 'Science Facutly',
            'location' => str_random(10),
            'phone' => str_random(10),
        ]);
    }
}
