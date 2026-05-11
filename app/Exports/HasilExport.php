<?php

namespace App\Exports;

use App\Models\User;
use App\Models\NilaiSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class HasilExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    protected $search;
    protected $kelas;

    public function __construct($search = null, $kelas = null)
    {
        $this->search = $search;
        $this->kelas = $kelas;
    }

    public function collection()
    {
        $usersQuery = User::where('role', 'siswa');

        if ($this->search) {
            $usersQuery->where(function ($q) {
                $q->where('name', 'like', "%{$this->search}%")
                    ->orWhere('nim', 'like', "%{$this->search}%");
            });
        }

        if ($this->kelas) {
            $usersQuery->where('kelas', $this->kelas);
        }

        $users = $usersQuery->orderBy('name', 'asc')->get();

        foreach ($users as $user) {
            $scores = NilaiSiswa::where('id_user', $user->id)
                ->selectRaw('jenis_kuis, MAX(nilai) as max_nilai')
                ->groupBy('jenis_kuis')
                ->pluck('max_nilai', 'jenis_kuis');

            $user->scores = $scores;
        }

        return $users;
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Siswa',
            'NIS',
            'Kelas',
            'Kuis 1',
            'Kuis 2',
            'Kuis 3',
            'Kuis 4',
            'Evaluasi',
        ];
    }

    public function map($user): array
    {
        static $no = 1;
        $quizKeys = ['Kuis 1', 'Kuis 2', 'Kuis 3', 'Kuis 4', 'Evaluasi'];

        $row = [
            $no++,
            $user->name,
            $user->nim,
            $user->kelas ?? '-',
        ];

        foreach ($quizKeys as $key) {
            $row[] = isset($user->scores[$key]) ? round($user->scores[$key]) : '0';
        }

        return $row;
    }
}
