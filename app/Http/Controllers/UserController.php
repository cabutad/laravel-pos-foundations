<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Carlos Joaquin Butad', 'email' => 'cabutad@feualabang.edu.ph', 'role' => 'Admin', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Maria Santos', 'email' => 'maria@example.com', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 4, 'name' => 'Ana Reyes', 'email' => 'ana@example.com', 'role' => 'Inventory', 'status' => 'Inactive'],
            ['id' => 5, 'name' => 'Pedro Lim', 'email' => 'pedro@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 6, 'name' => 'Sofia Cruz', 'email' => 'sofia@example.com', 'role' => 'Manager', 'status' => 'Active'],
        ];

        return view('users', compact('users'));
    }
}
