<?php

namespace App\Http\Controllers;


use App\Models\SoalKuis;
use App\Models\NilaiSiswa;
use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Exports\HasilExport;
use App\Exports\QuizDetailExport;
use App\Models\Kkm;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class QuizController extends Controller
{
    public function index()
    {
        $soalKuis = SoalKuis::where('jenis_kuis', 'Kuis 1')->get();
        $kkm = Kkm::where('kuis', 'Kuis 1')->first();
        return view('/quiz/quiz_bab1', compact('soalKuis', 'kkm'));
    }

    public function index2()
    {
        // Ambil soal kuis untuk Kuis 2
        $soalKuis = SoalKuis::where('jenis_kuis', 'Kuis 2')->get();
        $kkm = Kkm::where('kuis', 'Kuis 2')->first();
        return view('/quiz/quiz_bab2', compact('soalKuis', 'kkm'));
    }


    public function index3()
    {
        $soalKuis = SoalKuis::where('jenis_kuis', 'Kuis 3')->get();
        $kkm = Kkm::where('kuis', 'Kuis 3')->first();
        return view('/quiz/quiz_bab3', compact('soalKuis', 'kkm'));
    }

    public function index4()
    {
        $soalKuis = SoalKuis::where('jenis_kuis', 'Kuis 4')->get();
        $kkm = Kkm::where('kuis', 'Kuis 4')->first();
        return view('/quiz/quiz_bab4', compact('soalKuis', 'kkm'));
    }

    public function evaluasi()
    {
        $soalKuis = SoalKuis::where('jenis_kuis', 'Evaluasi')->get();
        $kkm = Kkm::where('kuis', 'Evaluasi')->first();
        return view('/quiz/evaluasi', compact('soalKuis', 'kkm'));
    }

    public function hasil($type)
    {
        $typeText = [
            '1' => 'Kuis 1',
            '2' => 'Kuis 2',
            '3' => 'Kuis 3',
            '4' => 'Kuis 4',
            'evaluasi' => 'Evaluasi',
        ];

        // $type = $typeText[$type];

        $nilai = session('nilai');
        $typeText = [
            '1' => 'Kuis 1',
            '2' => 'Kuis 2',
            '3' => 'Kuis 3',
            '4' => 'Kuis 4',
            'evaluasi' => 'Evaluasi',
        ];
        $typeName = isset($typeText[$type]) ? $typeText[$type] : $type;
        $kkm = Kkm::where('kuis', $typeName)->first();
        
        return view('/quiz/hasil_quiz', compact('type', 'nilai', 'kkm'));
    }

    public function simpanNilai(Request $request)
    {
        // Validasi data
        $request->validate([
            'nilai' => 'required|numeric',
        ]);

        $score = 100 / $request->input('total_soal') * $request->input('nilai');
        $type = $request->input('type');
        $userId = auth()->user()->id;

        // Ambil KKM
        $kkm = Kkm::where('kuis', $type)->first();
        $kkmValue = $kkm ? $kkm->nilai : null;

        // Cek percobaan ke berapa
        $attemptsCount = NilaiSiswa::where('id_user', $userId)
            ->where('jenis_kuis', $type)
            ->count();

        // Logika percobaan kedua: jika nilai > KKM, maka simpan = KKM
        if ($attemptsCount == 1 && $kkmValue !== null) {
            if ($score > $kkmValue) {
                $score = $kkmValue;
            }
        }

        // Simpan nilai ke database
        NilaiSiswa::create([
            'id_user' => $userId,  // ID pengguna yang login
            'nama' => auth()->user()->name,   // Nama pengguna yang login
            'nilai' => $score, // Nilai yang dikirimkan (mungkin sudah di-cap)
            'jenis_kuis' => $type,  // Jenis kuis
            'jawaban' => json_decode($request->input('jawaban'), true), // Store JSON details
        ]);

        return redirect()->route('hasil_quiz', ['type' => $type])
            ->with([
                'nilai' => $score,
                'total_soal' => $request->input('total_soal'),
                'benar' => $request->input('nilai'),
            ]);
    }

    public function list(Request $request)
    {
        $search = $request->input('search');
        $kelas_filter = $request->input('kelas');

        $usersQuery = User::where('role', 'siswa');

        if ($search) {
            $usersQuery->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('nim', 'like', "%{$search}%");
            });
        }

        if ($kelas_filter) {
            $usersQuery->where('kelas', $kelas_filter);
        }

        $perPage = $request->input('per_page', 10);
        $users = $usersQuery->orderBy('name', 'asc')->paginate($perPage)->withQueryString();

        // Get max scores for each user
        foreach ($users as $user) {
            $scores = NilaiSiswa::where('id_user', $user->id)
                ->selectRaw('jenis_kuis, MAX(nilai) as max_nilai')
                ->groupBy('jenis_kuis')
                ->pluck('max_nilai', 'jenis_kuis');

            $user->scores = $scores;
        }

        $kelasList = \App\Models\Kelas::orderBy('kelas', 'asc')->get();

        return view('hasil_kuis/list', compact('users', 'kelasList'));
    }

    public function detail($userId, $type)
    {
        $user = User::findOrFail($userId);
        $attempts = NilaiSiswa::where('id_user', $userId)
            ->where('jenis_kuis', $type)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('hasil_kuis/detail', compact('user', 'attempts', 'type'));
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new HasilExport($request->search, $request->kelas), 'hasil_kuis_summary.xlsx');
    }

    public function exportDetailExcel($userId, $type)
    {
        $user = User::findOrFail($userId);
        $fileName = 'Riwayat_' . str_replace(' ', '_', $type) . '_' . str_replace(' ', '_', $user->name) . '.xlsx';
        return Excel::download(new QuizDetailExport($userId, $type), $fileName);
    }

    public function exportPdf(Request $request)
    {
        $search = $request->input('search');
        $type = $request->input('jenis_kuis');

        $query = NilaiSiswa::query();

        if ($search) {
            $query->where('nama', 'like', "%{$search}%");
        }

        if ($type) {
            $query->where('jenis_kuis', $type);
        }

        if ($request->kelas) {
            $query->whereHas('user', function($q) use ($request) {
                $q->where('kelas', $request->kelas);
            });
        }

        $nilaiSiswa = $query->orderBy('created_at', 'desc')->get();

        $pdf = Pdf::loadView('hasil_kuis/pdf', compact('nilaiSiswa'));
        return $pdf->download('hasil_kuis.pdf');
    }
}
