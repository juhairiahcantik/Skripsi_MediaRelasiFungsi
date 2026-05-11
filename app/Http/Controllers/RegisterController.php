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

    public function store(Request $request): RedirectResponse
    {
        // Validasi input
        $validator = $request->validate([
            // 'namaInput' => 'required',
            'UsernameInput' => 'required',
            'nimInput' => 'required|numeric',
            'passwordInput' => 'required|min:8|confirmed',
            'role' => 'required|in:siswa,guru',  // Validasi untuk role
            'kelas' => 'required_if:role,siswa'
        ], []);

        // Simpan data ke database
        $query = User::create([
            'name' => $request->UsernameInput,
            'nim' => $request->nimInput,
            'password' => Hash::make($request->passwordInput),
            'role' => $request->role,  // Menyimpan role
            'kelas' => $request->role == 'siswa' ? $request->kelas : null,
        ]);

        // dd($query);

        // Redirect jika berhasil atau gagal
        if ($query) {
            return redirect()->route('login')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect()->back()->withErrors(['error' => 'Gagal mendaftar, coba lagi.']);
        }
    }

    // Metode lain seperti index, edit, update, destroy tetap sama.
}
