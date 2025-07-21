<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permissions
        $permissions = [
            'manage users',
            'manage roles',
            'create pasien',
            'read pasien',
            'update pasien',
            'delete pasien',
            'create riwayat',
            'read riwayat',
            'update riwayat',
            'delete riwayat',
            'create jadwal',
            'read jadwal',
            'update jadwal',
            'delete jadwal',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $petugasRole = Role::firstOrCreate(['name' => 'petugas']);


        $admin = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // Assign admin role to user
        $admin->assignRole($adminRole);

        // Assign permissions to admin
        $adminRole->syncPermissions($permissions);

        // Assign limited permissions to petugas
        $petugasRole->syncPermissions([
            'create riwayat',
            'read riwayat',
            'update riwayat',
            'create pasien',
            'read pasien',
            'update pasien',
            'read jadwal',
            'update jadwal',
        ]);
    }
}
