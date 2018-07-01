<?php

use Illuminate\Database\Seeder;

class UserCreator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_id' => 1,
            'username' => 'admin',
            'first_name' => 'Hywel',
            'last_name' => 'Emery',
            'phone' => '0712365498',
            'role' => 'admin',
            'password' => 'secret', // bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'user_id' => 2,
            'username' => 'professor',
            'first_name' => 'Alexander',
            'last_name' => 'Lucero',
            'phone' => '0712365498',
            'role' => 'professor',
            'password' => 'secret', // bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'user_id' => 3,
            'username' => 'undergraduate',
            'first_name' => 'John',
            'last_name' => 'Snow',
            'phone' => '0712365498',
            'role' => 'undergraduate',
            'password' => 'secret', // bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'user_id' => 4,
            'username' => 'postgraduate',
            'first_name' => 'Allen',
            'last_name' => 'Webber',
            'phone' => '0712365498',
            'role' => 'postgraduate',
            'password' => 'secret', // bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'user_id' => 5,
            'username' => 'librarian',
            'first_name' => 'James',
            'last_name' => 'Wattson',
            'phone' => '0712365498',
            'role' => 'librarian',
            'password' => 'secret', // bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'user_id' => 6,
            'username' => 'manager',
            'first_name' => 'Sherlock',
            'last_name' => 'Holmes',
            'phone' => '0712365498',
            'role' => 'manager',
            'password' => 'secret', // bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'user_id' => 20,
            'username' => 'professor2',
            'first_name' => 'Owais',
            'last_name' => 'Wallace',
            'phone' => '0712365498',
            'role' => 'professor',
            'password' => 'secret', // bcrypt('secret'),
        ]);



        DB::table('employees')->insert([
            'employee_id' => 'emp1',
            'user_id' => 2,
        ]);

        DB::table('professors')->insert([
            'employee_id' => 'emp1',
            'department_id' => 'ucsc',
        ]);

        DB::table('employees')->insert([
            'employee_id' => 'emp3',
            'user_id' => 20,
        ]);

        DB::table('professors')->insert([
            'employee_id' => 'emp3',
            'department_id' => 'science',
        ]);

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
