<?php

namespace App\Exports;

use App\Models\NilaiSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class QuizDetailExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    protected $userId;
    protected $type;

    public function __construct($userId, $type)
    {
        $this->userId = $userId;
        $this->type = $type;
    }

    public function collection()
    {
        return NilaiSiswa::where('id_user', $this->userId)
            ->where('jenis_kuis', $this->type)
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function headings(): array
    {
        $headings = [
            'Percobaan',
            'Tanggal Pengerjaan',
            'Nilai',
            'Status',
        ];

        for ($i = 1; $i <= 10; $i++) {
            $headings[] = 'Soal ' . $i;
        }

        return $headings;
    }

    public function map($at): array
    {
        static $no = 1;
        $row = [
            'Ke-' . $no++,
            $at->created_at->format('d/m/Y H:i'),
            round($at->nilai),
            $at->nilai >= 70 ? 'Lulus' : 'Tidak Lulus',
        ];

        for ($i = 1; $i <= 10; $i++) {
            $isCorrect = false;
            if ($at->jawaban && isset($at->jawaban[$i - 1])) {
                $isCorrect = $at->jawaban[$i - 1]['is_benar'] ?? false;
            }
            $row[] = $isCorrect ? 'Benar' : 'Salah';
        }

        return $row;
    }
}
