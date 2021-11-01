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
            'name' => 'editor'
        ]);
        $role3 = Role::create([
            'name' => 'tesorero'
        ]);
        $role4 = Role::create([
            'name' => 'logistica'
        ]);
        $role5 = Role::create([
            'name' => 'compras'
        ]);

        Permission::create([
            'name' => 'admin.home',
            'description' => 'Ver Panel'
        ])->syncRoles([$role1, $role2, $role3, $role4, $role5]);;

        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver lista de usuarios'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.users.create',
            'description' => 'Editar usuarios'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Editar usuarios'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver categorias'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear categorias'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Editar categorias'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.categories.destroy',
            'description' => 'Eliminar categorias'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.products.index',
            'description' => 'Ver productos'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.products.create',
            'description' => 'Crear productos'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.products.edit',
            'description' => 'Editar productos'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.products.destroy',
            'description' => 'Eliminar productos'
        ])->syncRoles([$role1, $role5]);

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


        Permission::create([
            'name' => 'admin.tags.index',
            'description' => 'Ver etiqueta'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.tags.create',
            'description' => 'Crear etiquetas'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.tags.edit',
            'description' => 'Editar etiquetas'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.tags.destroy',
            'description' => 'Eliminar etiquetas'
        ])->syncRoles([$role1, $role2]);


        Permission::create([
            'name' => 'admin.posts.index',
            'description' => 'Ver post'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.posts.create',
            'description' => 'Crear posts'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.posts.edit',
            'description' => 'Editar posts'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.posts.destroy',
            'description' => 'Eliminar posts'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.catalogues.index',
            'description' => 'Ver Catalogos'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.catalogues.create',
            'description' => 'Crear Catalogos'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.catalogues.edit',
            'description' => 'Editar Catalogos'
        ])->syncRoles([$role1, $role5]);

        Permission::create([
            'name' => 'admin.catalogues.destroy',
            'description' => 'Eliminar Catalogos'
        ])->syncRoles([$role1, $role5]);


        Permission::create([
            'name' => 'admin.coupons.index',
            'description' => 'Ver Cupones'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.coupons.create',
            'description' => 'Crear Cupones'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.coupons.edit',
            'description' => 'Editar Cupones'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.coupons.destroy',
            'description' => 'Eliminar Cupones'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.web.index',
            'description' => 'Administracion de sitio'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.reports.index',
            'description' => 'Reportes'
        ])->syncRoles([$role1, $role3]);


        Permission::create([
            'name' => 'admin.orders.index',
            'description' => 'Ver ordenes'
        ])->syncRoles([$role1, $role4]);

        Permission::create([
            'name' => 'admin.orders.edit',
            'description' => 'Editar ordenes'
        ])->syncRoles([$role1, $role4]);

        Permission::create([
            'name' => 'admin.orders.destroy',
            'description' => 'Eliminar ordenes'
        ])->syncRoles([$role1]);
    }
}
