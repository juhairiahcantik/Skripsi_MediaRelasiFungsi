<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoalKuis; // Pastikan model yang digunakan benar
use App\Exports\SoalExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class SoalKuisController extends Controller
{
    public function index()
    {
        $type = 'Tambah';
        $soalKuis = SoalKuis::all(); // Mengambil semua data soal
        return view('soal_kuis/soal_kuis', compact('soalKuis', 'type'));
    }

    public function list(Request $request)
    {
        $search = $request->input('search', '');
        $type = $request->input('jenis_kuis', '');

        $soalKuis = SoalKuis::query();

        if ($search !== '') {
            $soalKuis = $soalKuis->where(function ($query) use ($search) {
                $query->where('pertanyaan', 'like', '%' . $search . '%')
                    ->orWhere('pilihan_a', 'like', '%' . $search . '%')
                    ->orWhere('pilihan_b', 'like', '%' . $search . '%')
                    ->orWhere('pilihan_c', 'like', '%' . $search . '%')
                    ->orWhere('pilihan_d', 'like', '%' . $search . '%');
            });
        }

        if ($type !== '') {
            $soalKuis = $soalKuis->where('jenis_kuis', $type);
        }

        $perPage = $request->input('per_page', 10);
        $soalKuis = $soalKuis->orderBy('created_at', 'desc')->paginate($perPage)->withQueryString();

        $quizTypes = SoalKuis::select('jenis_kuis')->distinct()->pluck('jenis_kuis');

        return view('soal_kuis/list', compact('soalKuis', 'quizTypes'));
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new SoalExport($request->search, $request->jenis_kuis), 'soal_kuis.xlsx');
    }

    public function exportPdf(Request $request)
    {
        $search = $request->input('search', '');
        $type = $request->input('jenis_kuis', '');

        $query = SoalKuis::query();

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('pertanyaan', 'like', '%' . $search . '%')
                    ->orWhere('pilihan_a', 'like', '%' . $search . '%')
                    ->orWhere('pilihan_b', 'like', '%' . $search . '%')
                    ->orWhere('pilihan_c', 'like', '%' . $search . '%')
                    ->orWhere('pilihan_d', 'like', '%' . $search . '%');
            });
        }

        if ($type !== '') {
            $query->where('jenis_kuis', $type);
        }

        $soalKuis = $query->orderBy('created_at', 'desc')->get();

        $pdf = Pdf::loadView('soal_kuis/pdf', compact('soalKuis'));
        return $pdf->download('soal_kuis.pdf');
    }

    public function create()
    {
        return view('soal_kuis.create'); // Mengarahkan ke form pembuatan soal
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_kuis' => 'required|in:Kuis 1,Kuis 2,Kuis 3,Kuis 4,Evaluasi',
            'pertanyaan' => 'required',
            'pilihan_a' => 'required|max:255',
            'pilihan_b' => 'required|max:255',
            'pilihan_c' => 'required|max:255',
            'pilihan_d' => 'required|max:255',
            'jawaban_benar' => 'required|in:A,B,C,D',
        ]);

        // Simpan ke database
        SoalKuis::create([
            'jenis_kuis' => $request->jenis_kuis,
            'pertanyaan' => $request->pertanyaan,
            'pilihan_a' => $request->pilihan_a,
            'pilihan_b' => $request->pilihan_b,
            'pilihan_c' => $request->pilihan_c,
            'pilihan_d' => $request->pilihan_d,
            'jawaban_benar' => $request->jawaban_benar,
        ]);

        return redirect()->route('soal_kuis.list')->with('success', 'Soal berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $type = 'Edit';
        $kuis = SoalKuis::find($id);
        return view('soal_kuis/soal_kuis', compact('kuis', 'type'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_kuis' => 'required|in:Kuis 1,Kuis 2,Kuis 3,Evaluasi',
            'pertanyaan' => 'required',
            'pilihan_a' => 'required|max:255',
            'pilihan_b' => 'required|max:255',
            'pilihan_c' => 'required|max:255',
            'pilihan_d' => 'required|max:255',
            'jawaban_benar' => 'required|in:A,B,C,D',
        ]);

        $soal = SoalKuis::find($id);

        // dd($request);

        // Simpan ke database
        $soal->jenis_kuis = $request->jenis_kuis;
        $soal->pertanyaan = $request->pertanyaan;
        $soal->pilihan_a = $request->pilihan_a;
        $soal->pilihan_b = $request->pilihan_b;
        $soal->pilihan_c = $request->pilihan_c;
        $soal->pilihan_d = $request->pilihan_d;
        $soal->jawaban_benar = $request->jawaban_benar;

        $soal->save();

        return redirect()->route('soal_kuis.list')->with('success', 'Soal berhasil diedit!');
    }

    public function delete($id)
    {
        $soal = SoalKuis::find($id);

        $soal->delete();

        return redirect()->route('soal_kuis.list')->with('success', 'Soal berhasil dihapus!');
    }

}
