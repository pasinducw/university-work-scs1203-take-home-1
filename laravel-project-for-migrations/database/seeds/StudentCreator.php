<?php

use Illuminate\Database\Seeder;

class StudentCreator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'student_id' => '2017cs1951',
            'user_id' => 3,
            'address' => 'Wonderland',
        ]);

        DB::table('students')->insert([
            'student_id' => '2014cs0541',
            'user_id' => 4,
            'address' => 'Multiverse S201',
        ]);

        DB::table('undergraduates')->insert([
            'student_id' => '2017cs1951',
        ]);

        DB::table('postgraduates')->insert([
            'student_id' => '2014cs0541',
        ]);
    }
}
