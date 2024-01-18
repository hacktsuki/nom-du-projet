<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin5')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Syed Ahsan Kamal',
            'email' => 'ahsan@allphptricks.com',
            'password' => Hash::make('ahsan1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $consultant = User::create([
            'name' => 'Abdul Muqeet',
            'email' => 'muqeet@allphptricks.com',
            'password' => Hash::make('muqeet1234')
        ]);
        $consultant->assignRole('Consultant');
    }
}
