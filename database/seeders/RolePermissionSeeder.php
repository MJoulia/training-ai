<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage courses']);

        $admin = Role::create(['name' => 'Admin']);
        $staff = Role::create(['name' => 'Staff']);

        $admin->givePermissionTo([
            'manage users',
            'manage courses'
        ]);

        $staff->givePermissionTo([
            'manage courses'
        ]);
    }
}