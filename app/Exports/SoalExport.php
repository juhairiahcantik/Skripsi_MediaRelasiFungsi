<?php

namespace App\Exports;

use App\Models\SoalKuis;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SoalExport implements FromCollection, WithHeadings, WithMapping
{
    protected $search;
    protected $jenis_kuis;

    public function __construct($search = null, $jenis_kuis = null)
    {
        $this->search = $search;
        $this->jenis_kuis = $jenis_kuis;
    }

    public function collection()
    {
        $query = SoalKuis::query();

        if ($this->search) {
            $query->where('pertanyaan', 'like', '%' . $this->search . '%');
        }

        if ($this->jenis_kuis) {
            $query->where('jenis_kuis', $this->jenis_kuis);
        }

        return $query->orderBy('created_at', 'desc')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Jenis Kuis',
            'Pertanyaan',
            'Pilihan A',
            'Pilihan B',
            'Pilihan C',
            'Pilihan D',
            'Jawaban Benar',
            'Dibuat Pada',
        ];
    }

    public function map($soal): array
    {
        return [
            $soal->id,
            $soal->jenis_kuis,
            $soal->pertanyaan,
            $soal->pilihan_a,
            $soal->pilihan_b,
            $soal->pilihan_c,
            $soal->pilihan_d,
            $soal->jawaban_benar,
            $soal->created_at->format('d-m-Y H:i:s'),
        ];
    }
}
