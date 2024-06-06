<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permission
        $permissions = [
            'view notes',
            'create notes',
            'edit notes',
            'delete notes',
            'manage users'
        ];

        // Save permission into the database permission table
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        // Create role admin
        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        // Give the permissions into admin role
        $adminRole->givePermissionTo([
            'view notes',
            'create notes',
            'edit notes',
            'delete notes',
            'manage users'
        ]);

        // Create user role
        $userRole = Role::create([
            'name' => 'user'
        ]);

        $userRole->givePermissionTo([
            'view notes',
            'create notes',
            'edit notes',
            'delete notes',
        ]);

        // Create default admin account
        $user = User::create([
            'name' => 'Azriel Akbar Sofyan',
            'email' => 'azrielakbarsofyan@gmail.com',
            'password' => bcrypt('allahtuhanku1')
        ]);

        $user->assignRole($adminRole);
    }
}
