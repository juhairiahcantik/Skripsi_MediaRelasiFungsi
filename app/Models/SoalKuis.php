<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalKuis extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi
    protected $table = 'soal_kuis';

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'pertanyaan',
        'jenis_kuis',
        'pilihan_a',
        'pilihan_b',
        'pilihan_c',
        'pilihan_d',
        'jawaban_benar',
    ];



    // Jika Anda ingin mengatur timestamp
    public $timestamps = true;
}
