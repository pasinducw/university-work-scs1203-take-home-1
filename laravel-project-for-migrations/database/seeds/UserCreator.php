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
            'first_name' => 'John',
            'last_name' => 'Snow',
            'phone' => '0712365498',
            'is_admin' => '1',
            'password' => 'secret', // bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'username' => str_random(10),
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'phone' => str_random(10),
            'password' => 'secret', // bcrypt('secret'),
        ]);
    }
}
