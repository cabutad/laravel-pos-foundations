<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '09171234567', 'joined' => '2024-01-15', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '09181234567', 'joined' => '2024-02-20', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Carol White', 'email' => 'carol@example.com', 'phone' => '09191234567', 'joined' => '2024-03-05', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'David Lee', 'email' => 'david@example.com', 'phone' => '09201234567', 'joined' => '2024-04-10', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eve Garcia', 'email' => 'eve@example.com', 'phone' => '09211234567', 'joined' => '2024-05-22', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Frank Brown', 'email' => 'frank@example.com', 'phone' => '09221234567', 'joined' => '2024-06-30', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
