<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Carlos Joaquin Butad', 'email' => 'cabutad@feualabang.edu.ph', 'role' => 'Admin', 'status' => 'Active', 'avatar' => null],
            ['id' => 2, 'name' => 'Maria Santos', 'email' => 'maria@example.com', 'role' => 'Manager', 'status' => 'Active', 'avatar' => null],
            ['id' => 3, 'name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'role' => 'Cashier', 'status' => 'Active', 'avatar' => null],
            ['id' => 4, 'name' => 'Ana Reyes', 'email' => 'ana@example.com', 'role' => 'Inventory', 'status' => 'Inactive', 'avatar' => null],
            ['id' => 5, 'name' => 'Pedro Lim', 'email' => 'pedro@example.com', 'role' => 'Cashier', 'status' => 'Active', 'avatar' => null],
            ['id' => 6, 'name' => 'Sofia Cruz', 'email' => 'sofia@example.com', 'role' => 'Manager', 'status' => 'Active', 'avatar' => null],
        ];

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|unique:users,username',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string|max:50',
            'status' => 'required|in:Active,Inactive',
            'avatar' => 'nullable|image|max:2048',
        ]);

        // Create user in storage
        $userId = count($this->getUsers()) + 1;

        $user = [
            'id' => $userId,
            'username' => $validated['username'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'status' => $validated['status'],
            'avatar' => null,
        ];

        // Handle avatar upload
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = 'user_' . $userId . '_' . time() . '.' . $extension;
            $file->move(public_path('uploads/avatars'), $filename);
            $user['avatar'] = 'uploads/avatars/' . $filename;
        }

        // Store in session
        session(['users' => array_merge($this->getUsers(), [$user])]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit($id)
    {
        $users = $this->getUsers();
        $user = collect($users)->firstWhere('id', $id);

        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User not found.');
        }

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'username' => 'required|string|unique:users,username,' . $id,
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'role' => 'required|string|max:50',
            'status' => 'required|in:Active,Inactive',
            'avatar' => 'nullable|image|max:2048',
        ]);

        $users = session('users', []);
        $userKey = collect($users)->search(function ($u) use ($id) {
            return $u['id'] == $id;
        });

        if ($userKey === false) {
            return redirect()->route('users.index')->with('error', 'User not found.');
        }

        $users[$userKey] = array_merge($users[$userKey], $validated);

        // Handle avatar upload
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = 'user_' . $id . '_' . time() . '.' . $extension;
            $file->move(public_path('uploads/avatars'), $filename);
            $users[$userKey]['avatar'] = 'uploads/avatars/' . $filename;
        }

        session(['users' => $users]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy($id)
    {
        $users = session('users', []);
        $users = collect($users)->reject(function ($u) use ($id) {
            return $u['id'] == $id;
        })->values()->toArray();

        session(['users' => $users]);

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    /**
     * Get all users.
     */
    private function getUsers()
    {
        return session('users', [
            ['id' => 1, 'username' => 'admin', 'full_name' => 'Carlos Joaquin Butad', 'email' => 'cabutad@feualabang.edu.ph', 'role' => 'Admin', 'status' => 'Active', 'avatar' => null],
            ['id' => 2, 'username' => 'maria', 'full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'role' => 'Manager', 'status' => 'Active', 'avatar' => null],
            ['id' => 3, 'username' => 'juan', 'full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'role' => 'Cashier', 'status' => 'Active', 'avatar' => null],
            ['id' => 4, 'username' => 'ana', 'full_name' => 'Ana Reyes', 'email' => 'ana@example.com', 'role' => 'Inventory', 'status' => 'Inactive', 'avatar' => null],
            ['id' => 5, 'username' => 'pedro', 'full_name' => 'Pedro Lim', 'email' => 'pedro@example.com', 'role' => 'Cashier', 'status' => 'Active', 'avatar' => null],
            ['id' => 6, 'username' => 'sofia', 'full_name' => 'Sofia Cruz', 'email' => 'sofia@example.com', 'role' => 'Manager', 'status' => 'Active', 'avatar' => null],
        ]);
    }
}
