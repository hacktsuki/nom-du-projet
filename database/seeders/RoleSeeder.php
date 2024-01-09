<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $Consultantmanager = Role::create(['name' => 'Consultant Manager']);

        $superAdmin->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-consultant',
            'edit-consultant',
            'delete-consultant'
        ]);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-consultant',
            'edit-consultant',
            'delete-consultant'
        ]);

        $Consultantmanager->givePermissionTo([
            'create-consultant',
            'edit-consultant',
            'delete-consultant'
        ]);
    }
}
