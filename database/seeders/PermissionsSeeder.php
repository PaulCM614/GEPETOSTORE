<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Crear permisos
        Permission::create(['name' => 'access dashboard']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'access all modules']);

        // Obtener los roles
        $adminRole = Role::findByName('Administrador');
        $vendedorRole = Role::findByName('Vendedor');
        $clienteRole = Role::findByName('Cliente');

        // Asignar permisos al rol Administrador
        $adminRole->givePermissionTo(Permission::all());

        // Asignar permisos al rol Vendedor
        $vendedorRole->givePermissionTo(['access dashboard', 'access all modules']);

        // Asignar permisos al rol Cliente
        $clienteRole->givePermissionTo(['access dashboard']);
    }
}
