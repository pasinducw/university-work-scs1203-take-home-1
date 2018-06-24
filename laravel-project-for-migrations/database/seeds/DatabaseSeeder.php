<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserCreator::class);
        $this->call(DepartmentCreator::class);
        $this->call(CourseCreator::class);
        $this->call(ProfessorCreator::class);
    }
}
