<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'nutricionista']);
        $role3 = Role::create(['name' => 'paciente']);

        // $permission = Permission::create(['name' => 'create user']);
        // $permission2 = Permission::create(['name' => 'delete user']);
        // $permission3 = Permission::create(['name' => 'edit user']);
        // $permission4 = Permission::create(['name' => 'search user']);
    }
}
