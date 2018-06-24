<?php

use Illuminate\Database\Seeder;

class CourseCreator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'course_id' => 'dsa',
            'name' => 'DSA',
            'department_id' => 'ucsc',
            'credit_hours' => 100,
        ]);

        DB::table('sections')->insert([
            'course_id' => 'dsa',
            'section_id' => 'scs1201',
            'semester' => 1,
            'year' => 1,
        ]);

        DB::table('sections')->insert([
            'course_id' => 'dsa',
            'section_id' => 'scs1301',
            'semester' => 2,
            'year' => 1,
        ]);

        DB::table('courses')->insert([
            'course_id' => 'programming',
            'name' => 'Programming',
            'department_id' => 'ucsc',
            'credit_hours' => 80,
        ]);

        DB::table('sections')->insert([
            'course_id' => 'programming',
            'section_id' => 'scs1202',
            'semester' => 1,
            'year' => 2,
        ]);

        DB::table('courses')->insert([
            'course_id' => 'database',
            'name' => 'Database',
            'department_id' => 'ucsc',
            'credit_hours' => 50,
        ]);

        DB::table('sections')->insert([
            'course_id' => 'database',
            'section_id' => 'scs1203',
            'semester' => 1,
            'year' => 1,
        ]);

        DB::table('courses')->insert([
            'course_id' => 'biochemistry',
            'name' => 'Bio Chemistry',
            'department_id' => 'science',
            'credit_hours' => 100,
        ]);
    }
}
