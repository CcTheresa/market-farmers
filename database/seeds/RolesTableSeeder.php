<?php
// File: database/seeders/RolesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Retrieve the role you want to delete
        $roleToDelete = Role::where('name', 'example_role')->first();

        if ($roleToDelete) {
            // Find all users with this role
            $usersWithRole = User::where('role_id', $roleToDelete->id)->get();

            // Reassign users to a different role
            $newRoleId = Role::where('name', 'default_role')->first()->id;
            foreach ($usersWithRole as $user) {
                $user->role_id = $newRoleId;
                $user->save();
            }

            // Now delete the role
            $roleToDelete->delete();
        }

        // Create new roles or seed other data as needed
        Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Admin role'
        ]);

        Role::create([
            'name' => 'vendor',
            'display_name' => 'Vendor',
            'description' => 'Vendor role'
        ]);

        Role::create([
            'name' => 'customer',
            'display_name' => 'Customer',
            'description' => 'Customer role'
        ]);
    }
}
