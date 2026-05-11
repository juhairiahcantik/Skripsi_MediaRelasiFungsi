<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kkm extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi
    protected $table = 'kkm';

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'kuis',
        'nilai',
    ];



    // Jika Anda ingin mengatur timestamp
    public $timestamps = true;
}
