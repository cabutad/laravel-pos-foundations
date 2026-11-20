<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the customers.
     */
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

    /**
     * Show the form for creating a new customer.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created customer in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'nullable|string|max:20',
            'joined' => 'nullable|date',
        ]);

        // Create customer in storage
        $customer = [
            'id' => count($this->getCustomers()) + 1,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'joined' => $validated['joined'] ?? null,
        ];

        // Store in session
        session(['customers' => array_merge($this->getCustomers(), [$customer])]);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    /**
     * Show the form for editing the specified customer.
     */
    public function edit($id)
    {
        $customers = $this->getCustomers();
        $customer = collect($customers)->firstWhere('id', $id);

        if (!$customer) {
            return redirect()->route('customers.index')->with('error', 'Customer not found.');
        }

        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified customer in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'joined' => 'nullable|date',
        ]);

        $customers = session('customers', []);
        $customerKey = collect($customers)->search(function ($c) use ($id) {
            return $c['id'] == $id;
        });

        if ($customerKey === false) {
            return redirect()->route('customers.index')->with('error', 'Customer not found.');
        }

        $customers[$customerKey] = array_merge($customers[$customerKey], $validated);
        session(['customers' => $customers]);

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified customer from storage.
     */
    public function destroy($id)
    {
        $customers = session('customers', []);
        $customers = collect($customers)->reject(function ($c) use ($id) {
            return $c['id'] == $id;
        })->values()->toArray();

        session(['customers' => $customers]);

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }

    /**
     * Get all customers.
     */
    private function getCustomers()
    {
        return session('customers', [
            ['id' => 1, 'name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '09171234567', 'joined' => '2024-01-15'],
            ['id' => 2, 'name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '09181234567', 'joined' => '2024-02-20'],
            ['id' => 3, 'name' => 'Carol White', 'email' => 'carol@example.com', 'phone' => '09191234567', 'joined' => '2024-03-05'],
            ['id' => 4, 'name' => 'David Lee', 'email' => 'david@example.com', 'phone' => '09201234567', 'joined' => '2024-04-10'],
            ['id' => 5, 'name' => 'Eve Garcia', 'email' => 'eve@example.com', 'phone' => '09211234567', 'joined' => '2024-05-22'],
            ['id' => 6, 'name' => 'Frank Brown', 'email' => 'frank@example.com', 'phone' => '09221234567', 'joined' => '2024-06-30'],
        ]);
    }
}
