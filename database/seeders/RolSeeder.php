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
            'name' => 'admin.home',
            'description' => 'Ver Panel'
        ])->syncRoles([$role1]);;

        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver lista de usuarios'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Editar usuarios'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver categorias'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear categorias'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Editar categorias'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.destroy',
            'description' => 'Eliminar categorias'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.products.index',
            'description' => 'Ver productos'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.products.create',
            'description' => 'Crear productos'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.products.edit',
            'description' => 'Editar productos'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.products.destroy',
            'description' => 'Eliminar productos'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.colors.index',
            'description' => 'Ver colores'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.colors.create',
            'description' => 'Crear colores'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.colors.edit',
            'description' => 'Editar colores'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.colors.destroy',
            'description' => 'Eliminar colores'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.sizes.index',
            'description' => 'Ver tallas'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.sizes.create',
            'description' => 'Crear tallas'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.sizes.edit',
            'description' => 'Editar tallas'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.sizes.destroy',
            'description' => 'Eliminar tallas'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.roles.index',
            'description' => 'Ver roles'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.roles.create',
            'description' => 'Crear roles'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.roles.edit',
            'description' => 'Editar roles'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.roles.destroy',
            'description' => 'Eliminar roles'
        ])->syncRoles([$role1]);
    }
}
