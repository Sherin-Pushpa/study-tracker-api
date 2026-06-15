<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentDetailsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('student_details')->insert([
            [
                'name' => 'John',
                'age' => 20,
                'class' => 'BCA',
                'email' => 'john@example.com',
                'father_name' => 'Robert',
                'mother_name' => 'Mary',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sara',
                'age' => 19,
                'class' => 'BSc CS',
                'email' => 'sara@example.com',
                'father_name' => 'David',
                'mother_name' => 'Sophia',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}