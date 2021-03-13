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

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1]);;

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.products.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.products.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.products.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.products.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.colors.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.colors.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.colors.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.colors.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.sizes.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.sizes.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.sizes.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.sizes.destroy'])->syncRoles([$role1]);

    }
}
