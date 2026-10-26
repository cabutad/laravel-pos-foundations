<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '09171234567', 'joined' => '2024-01-15'],
            ['id' => 2, 'name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '09181234567', 'joined' => '2024-02-20'],
            ['id' => 3, 'name' => 'Carol White', 'email' => 'carol@example.com', 'phone' => '09191234567', 'joined' => '2024-03-05'],
            ['id' => 4, 'name' => 'David Lee', 'email' => 'david@example.com', 'phone' => '09201234567', 'joined' => '2024-04-10'],
            ['id' => 5, 'name' => 'Eve Garcia', 'email' => 'eve@example.com', 'phone' => '09211234567', 'joined' => '2024-05-22'],
            ['id' => 6, 'name' => 'Frank Brown', 'email' => 'frank@example.com', 'phone' => '09221234567', 'joined' => '2024-06-30'],
        ];

        return view('customers', compact('customers'));
    }
}
