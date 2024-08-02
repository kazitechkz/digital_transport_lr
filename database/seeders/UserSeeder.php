<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $department = Department::where('title_ru', 'Администрация')->first();
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'birthday' => '2000-01-01',
            'phone' => '+7 (777) 777 77-77',
            'department_id' => $department->id,
            'gender' => 'man'
        ]);
        $user->assignRole('Администратор');
    }
}
