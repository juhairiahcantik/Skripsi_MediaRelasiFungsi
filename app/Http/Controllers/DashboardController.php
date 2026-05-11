<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        if (Auth::user()->is_admin == 1) {
            return view('admin_dashboard');
        } else {
            return view('user_dashboard');
        }
    }
    
    // public function showDataPengguna()
    // {
    //     if (Auth::user()->is_admin == 1) {
    //         $data['users'] = User::all();
    //         return view('data_pengguna', $data);
    //     } else {
    //         return redirect()->route('dashboard');
    //     }
    // }
    /**
     * Show the form for creating a new resource.
     */
}
