<?php

namespace Database\Seeders;

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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Secretaria']);
        $role3 = Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'admin.home', 'description' => 'Ver Dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver Listado de Usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar un Rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver listado de Categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear Categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Editar Categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar Categorias'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver Listado de Etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear Etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar Etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar Etiquetas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver Listado de Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar Posts'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.companies.index', 'description' => 'Ver Listado de Empresas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.companies.create', 'description' => 'Crear Empresa'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.companies.edit', 'description' => 'Editar Empresa'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.companies.destroy', 'description' => 'Eliminar Empresa'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.elements.index', 'description' => 'Ver Listado de Elementos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.elements.create', 'description' => 'Crear Elemento'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.elements.edit', 'description' => 'Editar Elemento'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.elements.destroy', 'description' => 'Eliminar Elemento'])->syncRoles([$role1]);
    }
}
