<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // Hanya PM dan APM yang boleh mengakses
        if (!in_array(Auth::user()->role, ['PM', 'APM'])) {
            abort(403, 'Unauthorized action.');
            return redirect()->route('kanban.index')->with('error','anda tidak memiliki akses');
        }

        // Ambil semua user kecuali PM
        $users = User::where('role', '!=', 'PM')->get();

        return view('dashboard.user', compact('users'));
    }

    public function updateRole(Request $request, User $user)
    {
        // Hanya PM yang boleh mengubah role
        if (Auth::user()->role !== 'PM') {
           
            return redirect()->route('dashboard.user')->with('error','anda tidak memiliki akses');
        }

        $request->validate([
            'role' => 'required|in:APM,User',
        ]);

        $user->update(['role' => $request->role]);

        return redirect()->route('dashboard.user')->with('success', 'Role berhasil diperbarui.');
    }
}
