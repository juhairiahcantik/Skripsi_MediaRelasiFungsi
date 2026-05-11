<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi
    protected $table = 'kelas';

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'kelas',
    ];

    // Jika Anda ingin mengatur timestamp
    public $timestamps = true;
}
