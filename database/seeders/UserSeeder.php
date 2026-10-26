<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Carlos Joaquin Butad', 'email' => 'cabutad@feualabang.edu.ph', 'password' => Hash::make('password'), 'role' => 'Admin', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maria Santos', 'email' => 'maria@example.com', 'password' => Hash::make('password'), 'role' => 'Manager', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'password' => Hash::make('password'), 'role' => 'Cashier', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ana Reyes', 'email' => 'ana@example.com', 'password' => Hash::make('password'), 'role' => 'Inventory', 'status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pedro Lim', 'email' => 'pedro@example.com', 'password' => Hash::make('password'), 'role' => 'Cashier', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofia Cruz', 'email' => 'sofia@example.com', 'password' => Hash::make('password'), 'role' => 'Manager', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
