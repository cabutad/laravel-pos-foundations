<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Carlos Joaquin Butad', 'email' => 'cabutad@feualabang.edu.ph', 'password' => Hash::make('password'), 'role' => 'Admin', 'status' => 'Active'],
            ['name' => 'Maria Santos', 'email' => 'maria@example.com', 'password' => Hash::make('password'), 'role' => 'Manager', 'status' => 'Active'],
            ['name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'password' => Hash::make('password'), 'role' => 'Cashier', 'status' => 'Active'],
            ['name' => 'Ana Reyes', 'email' => 'ana@example.com', 'password' => Hash::make('password'), 'role' => 'Inventory', 'status' => 'Inactive'],
            ['name' => 'Pedro Lim', 'email' => 'pedro@example.com', 'password' => Hash::make('password'), 'role' => 'Cashier', 'status' => 'Active'],
            ['name' => 'Sofia Cruz', 'email' => 'sofia@example.com', 'password' => Hash::make('password'), 'role' => 'Manager', 'status' => 'Active'],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['email' => $user['email']],
                $user + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
