<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $role = $request->input('role');
        $kelas_filter = $request->input('kelas');

        $user = User::query();

        if ($search) {
            $user->where(function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('nim', 'like', "%{$search}%");
            });
        }

        if ($role) {
            $user->where('role', $role);
        }

        if ($kelas_filter) {
            $user->where('kelas', $kelas_filter);
        }

        $perPage = $request->input('per_page', 10);
        $user = $user->orderBy('created_at', 'desc')->paginate($perPage)->withQueryString();

        $roles = User::select('role')->distinct()->pluck('role');
        $kelasList = \App\Models\Kelas::orderBy('kelas', 'asc')->get();

        return view('user/list', compact('user', 'roles', 'kelasList'));
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new UsersExport($request->search, $request->role, $request->kelas), 'data_pengguna.xlsx');
    }

    public function exportPdf(Request $request)
    {
        $search = $request->input('search');
        $role = $request->input('role');

        $query = User::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('nim', 'like', "%{$search}%");
            });
        }

        if ($role) {
            $query->where('role', $role);
        }

        if ($request->kelas) {
            $query->where('kelas', $request->kelas);
        }

        $user = $query->orderBy('created_at', 'desc')->get();

        $pdf = Pdf::loadView('user/pdf', compact('user'));
        return $pdf->download('data_pengguna.pdf');
    }

    public function create()
    {
        $type = 'Tambah';
        $kelasList = \App\Models\Kelas::orderBy('kelas', 'asc')->get();
        return view('user/create', compact('type', 'kelasList'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $validator = $request->validate([
            // 'namaInput' => 'required',
            'name' => 'required',
            'nim' => 'required|numeric',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:siswa,guru'  // Validasi untuk role
        ], []);

        // Simpan ke database
        User::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'kelas' => $request->kelas,
        ]);


        return redirect()->route('user.list')->with('success', 'Pengguna berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $type = 'Edit';
        $user = User::find($id);
        $kelasList = \App\Models\Kelas::orderBy('kelas', 'asc')->get();
        return view('user/create', compact('type', 'user', 'kelasList'));
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->password === '' || $request->password === null) {
            $request->validate([
                'name' => 'required',
                'nim' => 'required|numeric',
                'role' => 'required|in:siswa,guru'  // Validasi untuk role
            ], []);

        } else {
            $request->validate([
                // 'namaInput' => 'required',
                'name' => 'required',
                'nim' => 'required|numeric',
                'password' => 'required|min:8|confirmed',
                'role' => 'required|in:siswa,guru'  // Validasi untuk role
            ], []);

            $user->password = $request->password;
        }

        // dd($request);

        // Simpan ke database
        $user->name = $request->name;
        $user->nim = $request->nim;
        $user->role = $request->role;
        $user->kelas = $request->kelas;

        $user->save();


        return redirect()->route('user.list')->with('success', 'Pengguna berhasil diedit!');
    }

    public function delete($id)
    {
        $soal = User::find($id);

        $soal->delete();

        return redirect()->route('user.list')->with('success', 'Pengguna berhasil dihapus!');
    }
}
