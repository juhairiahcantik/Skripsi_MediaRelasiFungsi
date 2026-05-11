<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class buatQuizController extends Controller
{
    public function index () {
        return view ('quiz_CRUD/soal');
    }
}
