<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolesPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create or update roles
        $roles = [
            'admin_total' => 'Manage all aspects of the application',
            'admin_video_design' => 'Manage video and design related tasks',
            'admin_wining_product' => 'Manage winning product tasks',
            'admin_ads_manager' => 'Manage advertising campaigns',
            'admin_community_manager' => 'Manage community interactions',
        ];

        foreach ($roles as $roleName => $description) {
            Role::updateOrCreate(
                ['name' => $roleName],
                ['description' => $description]
            );
        }

        // Create or update permissions
        $permissions = [
            'manage orders',
            'manage videos',
            'manage designs',
            'manage products',
            'manage ads',
            'manage community',
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission]);
        }

        // Assign permissions to roles
        $roleAssignments = [
            'admin_total' => ['manage orders', 'manage videos', 'manage designs', 'manage products', 'manage ads', 'manage community'],
            'admin_video_design' => ['manage videos', 'manage designs'],
            'admin_wining_product' => ['manage products'],
            'admin_ads_manager' => ['manage ads'],
            'admin_community_manager' => ['manage community'],
        ];

        foreach ($roleAssignments as $roleName => $assignedPermissions) {
            $role = Role::where('name', $roleName)->first();
            foreach ($assignedPermissions as $permissionName) {
                $permission = Permission::where('name', $permissionName)->first();
                if ($permission) {
                    $role->givePermissionTo($permission);
                }
            }
        }

        // Create or update an admin user
        $adminUser = User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'firstname' => 'Admin',
                'lastname' => 'User',
                'password' => Hash::make('password'),
            ]
        );

        $adminUser->assignRole('admin_total'); // Assign a role to the admin user
    }
}
