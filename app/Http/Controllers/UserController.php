<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $totalUser = User::count();

        $admin = User::where('role', 'admin')
            ->count();

        $resepsionis = User::where('role', 'resepsionis')
            ->count();

        return view('user.index', compact(
            'users',
            'totalUser',
            'admin',
            'resepsionis'
        ));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => 'Aktif'
        ]);

        return redirect()
            ->route('user.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    public function edit(int|string $id)
    {
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    public function update(Request $request, int|string $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'role' => $request->role,
            'status' => $request->status
        ]);

        return redirect()
            ->route('user.index')
            ->with('success', 'User berhasil diperbarui');
    }

    public function destroy(int|string $id)
    {
        User::destroy($id);

        return redirect()
            ->route('user.index')
            ->with('success', 'User berhasil dihapus');
    }
}
