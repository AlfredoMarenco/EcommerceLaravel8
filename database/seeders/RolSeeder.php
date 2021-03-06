<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            'name' => 'admin'
        ]);
        $role2 = Role::create([
            'name' => 'user'
        ]);

        Permission::create([
            'name' => 'admin.home'
        ]);

        Permission::create([
            'name' => 'admin.home'
        ]);

        Permission::create([
            'name' => 'admin.home'
        ]);

        Permission::create([
            'name' => 'admin.home'
        ]);
        
    }
}
