<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'permission create']);
        Permission::create(['name' => 'permission read']);
        Permission::create(['name' => 'permission update']);
        Permission::create(['name' => 'permission delete']);
        Permission::create(['name' => 'role create']);
        Permission::create(['name' => 'role read']);
        Permission::create(['name' => 'role update']);
        Permission::create(['name' => 'role delete']);
        Permission::create(['name' => 'employee create']);
        Permission::create(['name' => 'employee read']);
        Permission::create(['name' => 'employee update']);
        Permission::create(['name' => 'employee delete']);
        Permission::create(['name' => 'department create']);
        Permission::create(['name' => 'department read']);
        Permission::create(['name' => 'department update']);
        Permission::create(['name' => 'department delete']);
    }
}
