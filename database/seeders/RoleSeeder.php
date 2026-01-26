<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Crear roles
        $adminRole = Role::create(['name' => 'admin']);
        $pastorRole = Role::create(['name' => 'pastor']);
        $customerRole = Role::create(['name' => 'customer']);

        // Crear permisos
        $permissions = [
            // Libros
            'books.view',
            'books.create',
            'books.edit',
            'books.delete',
            
            // Pedidos
            'orders.view-all',
            'orders.manage',
            
            // Usuarios
            'users.view',
            'users.edit',
            'users.delete',
            
            // Reportes
            'reports.view',
            'reports.export',
            
            // Categorías
            'categories.manage',
            
            // Configuración
            'settings.manage',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Asignar permisos al admin
        $adminRole->givePermissionTo(Permission::all());
        
        // Asignar permisos limitados al pastor
        $pastorRole->givePermissionTo([
            'books.view',
            'orders.view-all',
            'reports.view',
        ]);
        
        // Customer solo ve sus propias compras (sin permisos especiales)
    }
}