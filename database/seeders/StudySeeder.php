<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('study_trackers')->insert([
    [
        'subject_name' => 'Laravel',
        'topic' => 'Routing',
        'hours_studied' => 2,
        'completion_status' => 'Completed',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'subject_name' => 'PHP',
        'topic' => 'Functions',
        'hours_studied' => 3,
        'completion_status' => 'In Progress',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'subject_name' => 'MySQL',
        'topic' => 'Joins',
        'hours_studied' => 1,
        'completion_status' => 'Pending',
        'created_at' => now(),
        'updated_at' => now(),
    ]
]);
    }
}
