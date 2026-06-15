<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create([
        'name' => 'John',
        'email' => 'john@gmail.com',
        'password' => Hash::make('123456'),
        'role' => 'student',
    ]);

    User::create([
        'name' => 'David',
        'email' => 'david@gmail.com',
        'password' => Hash::make('123456'),
        'role' => 'student',
    ]);

    User::create([
        'name' => 'Priya',
        'email' => 'priya@gmail.com',
        'password' => Hash::make('123456'),
        'role' => 'student',
    ]);

    User::create([
        'name' => 'Arun',
        'email' => 'arun@gmail.com',
        'password' => Hash::make('123456'),
        'role' => 'student',
    ]);
    }
}
