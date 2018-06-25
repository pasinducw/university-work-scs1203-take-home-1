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
            'first_name' => 'Super',
            'last_name' => 'Man',
            'phone' => '0712365498',
            'role' => 'admin',
            'password' => 'secret', // bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'user_id' => 2,
            'username' => 'professor',
            'first_name' => 'Charles',
            'last_name' => 'Cameron',
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
            'first_name' => 'Sasuke',
            'last_name' => 'Uchiha',
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

    }
}
