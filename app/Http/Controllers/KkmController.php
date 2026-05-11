<?php

namespace App\Http\Controllers;

use App\Models\Kkm;
use Illuminate\Http\Request;

class KkmController extends Controller
{
    public function index()
    {
        $categories = ['Kuis 1', 'Kuis 2', 'Kuis 3', 'Kuis 4', 'Evaluasi'];
        $kkms = Kkm::whereIn('kuis', $categories)->get()->keyBy('kuis');

        return view('kkm.index', compact('categories', 'kkms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nilai' => 'required|array',
            'nilai.*' => 'required|numeric|min:0|max:100',
        ]);

        foreach ($request->nilai as $kuis => $nilai) {
            Kkm::updateOrCreate(
                ['kuis' => $kuis],
                ['nilai' => $nilai]
            );
        }

        return redirect()->back()->with('success', 'KKM berhasil diperbarui!');
    }
}
