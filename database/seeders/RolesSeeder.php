<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear los roles
      // Crear los roles
      Role::firstOrCreate(['name' => 'Administrador']);
      Role::firstOrCreate(['name' => 'Vendedor']);
      Role::firstOrCreate(['name' => 'Cliente']);

        // Espacio para crear permisos en el futuro
        // $permission = Permission::create(['name' => 'nombre_del_permiso']);
        // $role = Role::findByName('Administrador');
        // $role->givePermissionTo($permission);
    }
}
