<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function show()
    {
        return view('login');
    }

    /**
     * Handle user authentication.
     */
    public function auth(Request $request): RedirectResponse
    {
        // Validasi input login
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);

        // Attempt login dengan remember option
        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); // Regenerasi session ID

            // Redirect berdasarkan role
            return $this->authenticated();
        }

        // Jika gagal login, kembali dengan pesan error
        return back()->withErrors([
            'nim' => 'Tidak ada akun yang cocok dengan inputan Anda',
        ])->onlyInput('nim');
    }

    /**
     * Handle logout process.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout(); // Logout user
        $request->session()->invalidate(); // Hapus semua session
        $request->session()->regenerateToken(); // Regenerasi CSRF token

        return redirect()->route('login'); // Redirect ke halaman login
    }

    /**
     * Redirect users based on their role after login.
     */
 protected function authenticated(): RedirectResponse
{
    $user = Auth::user();

    if ($user->role === 'guru') {
        return redirect('/guru_dashboard');
    } else {
        return redirect('/dashboard');
    }
}

}
