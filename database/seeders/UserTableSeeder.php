<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // saad::admin  -> demo
            [
                'name' => 'Salman Saad',
                'uiuid' => '011211115',
                'email' => 'devsalmansaad@gmail.com',
                'password' => hash::make('saad1234'),
                'role' => 'admin',
                'status' => 'active'
            ],

            // admin
            [
                'name' => 'admin',
                'uiuid' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => hash::make('admin'),
                'role' => 'admin',
                'status' => 'active'
            ],

            // student

            [
                'name' => 'student',
                'uiuid' => 'student',
                'email' => 'student@gmail.com',
                'password' => hash::make('student'),
                'role' => 'student',
                'status' => 'active'
            ],

            // faculty
            [
                'name' => 'faculty',
                'uiuid' => 'faculty',
                'email' => 'faculty@gmail.com',
                'password' => hash::make('faculty'),
                'role' => 'faculty',
                'status' => 'active'
            ],

            // librarian
            [
                'name' => 'librarian',
                'uiuid' => 'librarian',
                'email' => 'librarian@gmail.com',
                'password' => hash::make('librarian'),
                'role' => 'librarian',
                'status' => 'active'
            ]
        ]);
    }
}
