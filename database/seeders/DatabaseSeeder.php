<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Admin::create([
            'name'=> 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=>hash('sha256','12345678'),
            'role'=>1,
            'mobile'=>'01711111111',
        ]);

        Teacher::create([
            'first_name'=>'sara',
            'last_name'=>'nik',
            'mobile'=>'0391252313',
            'gender' => 'female',
            'email' => 'niksa@yahoo.com',
            'password'=>hash('sha256','12345678'),
            'university'=> 'university of jordan',
            'field_study' => 'computer science',
            'qualification' => 'master',
            'experience' => '10 years',
        ]);

        Student::create([
            'first_name' => 'ahmed',
            'last_name' => 'aziik',
            'mobile' => '0222252313',
            'gender' => 'male',
            'field_study' => 'engineering',
            'email' => 'azik@gmail.com',
            'password'=>hash('sha256','12345678'),
            'inter'=>'202403',
        ]);
    }
}
