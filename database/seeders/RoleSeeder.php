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
        $Consultant = Role::create(['name' => 'Consultant']);

        $superAdmin->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'list-donations-consultant',
            'list-donations-platform'
        ]);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'list-donations-consultant',
            'list-donations-platform'
        ]);

        $Consultant->givePermissionTo([
            'list-donations-consultant'
        ]);
    }
}
