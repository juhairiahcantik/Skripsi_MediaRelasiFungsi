<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        $kelas = \App\Models\Kelas::orderBy('kelas', 'asc')->get();
        return view('register', compact('kelas'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'UsernameInput' => 'required|string|max:255',
        'nimInput' => 'required|string|max:50|unique:users,nim',
        'passwordInput' => 'required|string|min:6|confirmed',
        'kelas' => 'required|string',
        'role' => 'required|in:siswa',
    ]);

    User::create([
        'name' => $request->UsernameInput,
        'nim' => $request->nimInput,
        'password' => bcrypt($request->passwordInput),
        'kelas' => $request->kelas,

        // role dikunci, tidak boleh dari input bebas
        'role' => 'siswa',
    ]);

    return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
}

    // Metode lain seperti index, edit, update, destroy tetap sama.
}
