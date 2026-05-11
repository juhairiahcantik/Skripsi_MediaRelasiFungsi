<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, WithMapping
{
    protected $search;
    protected $role;
    protected $kelas;

    public function __construct($search = null, $role = null, $kelas = null)
    {
        $this->search = $search;
        $this->role = $role;
        $this->kelas = $kelas;
    }

    public function collection()
    {
        $query = User::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('nim', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->role) {
            $query->where('role', $this->role);
        }

        if ($this->kelas) {
            $query->where('kelas', $this->kelas);
        }

        return $query->orderBy('created_at', 'desc')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'NIM/NISN/NUPTK',
            'Role',
            'Kelas',
            'Dibuat Pada',
        ];
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->nim,
            $user->role,
            $user->kelas,
            $user->created_at->format('d-m-Y H:i:s'),
        ];
    }
}
