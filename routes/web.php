<?php


use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SoalKuisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KkmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::post('/quiz/store', [QuizController::class, 'store'])->name('quiz.store');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quiz.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quiz.store');
Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quiz.edit');
Route::put('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quiz.update');
Route::delete('/quizzes/{quiz}', [QuizController::class, 'destroy'])->name('quiz.destroy');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/data-pengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna');
    Route::get('/quiz/quiz_bab1', [QuizController::class, 'index']);
    Route::get('quiz/quiz_bab2', [QuizController::class, 'index2'])->name('quiz_bab2');
    Route::get('quiz/quiz_bab3', [QuizController::class, 'index3'])->name('quiz_bab3');
    Route::get('quiz/quiz_bab4', [QuizController::class, 'index4'])->name('quiz_bab4');
    Route::get('quiz/evaluasi', [QuizController::class, 'evaluasi'])->name('evaluasi');

    Route::get('/petunjuk/petunjuk_bab1', function () {
        return view('petunjuk.petunjuk_bab1');
    })->name('petunjuk_bab1');
    Route::get('/petunjuk/petunjuk_bab2', function () {
        return view('petunjuk.petunjuk_bab2');
    })->name('petunjuk_bab2');
    Route::get('/petunjuk/petunjuk_bab3', function () {
        return view('petunjuk.petunjuk_bab3');
    })->name('petunjuk_bab3');
    Route::get('/petunjuk/petunjuk_bab4', function () {
        return view('petunjuk.petunjuk_bab4');
    })->name('petunjuk_bab4');
    Route::get('/petunjuk/petunjuk_evaluasi', function () {
        return view('petunjuk.petunjuk_evaluasi');
    })->name('petunjuk_evaluasi');
    Route::get('quiz/hasil/{type}', [QuizController::class, 'hasil'])->name('hasil_quiz');

    Route::get('/bab_1/peta_konsep', function () {
        return view('bab_1/peta_konsep');
    });
    Route::get('/bab_1/bab_1', function () {
        return view('bab_1/bab_1');
    });
    Route::get('/bab_1/bab_2', function () {
        return view('bab_1/bab_2');
    });

    Route::get('/bab_1/bab_3', function () {
        return view('bab_1/bab_3');
    });
    Route::get('/bab_1/bab_4', function () {
        return view('bab_1/bab_4');
    });

    Route::get('/bab_1/lanjut_1', function () {
        return view('bab_1/lanjut_1');
    });
    Route::get('/bab_1/lanjut_2', function () {
        return view('bab_1/lanjut_2');
    });
    Route::get('/bab_1/lanjut_3_1', function () {
        return view('bab_1/lanjut_3_1');
    });
    Route::get('/bab_1/lanjut_4', function () {
        return view('bab_1/lanjut_4');
    });


    Route::get('/guru_dashboard', function () {
        return view('/guru_dashboard');
    });

    Route::get('/hasil_kuis', [QuizController::class, 'list'])->name('hasil_kuis.list');
    Route::get('/hasil_kuis/detail/{userId}/{type}', [QuizController::class, 'detail'])->name('hasil_kuis.detail');
    Route::get('/hasil-kuis/export-excel', [QuizController::class, 'exportExcel'])->name('hasil_kuis.export.excel');
    Route::get('/hasil-kuis/export-detail-excel/{userId}/{type}', [QuizController::class, 'exportDetailExcel'])->name('hasil_kuis.export.detail.excel');
    Route::get('/hasil_kuis/export/pdf', [QuizController::class, 'exportPdf'])->name('hasil_kuis.export.pdf');

    Route::get('/user', [UserController::class, 'index'])->name('user.list');
    Route::get('/user/export/excel', [UserController::class, 'exportExcel'])->name('user.export.excel');
    Route::get('/user/export/pdf', [UserController::class, 'exportPdf'])->name('user.export.pdf');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/update/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    // routes/web.phpuse 
    // Rute untuk Soal Kuis
    Route::get('/soal_kuis/list', [SoalKuisController::class, 'list'])->name('soal_kuis.list');
    Route::get('/soal_kuis/export/excel', [SoalKuisController::class, 'exportExcel'])->name('soal_kuis.export.excel');
    Route::get('/soal_kuis/export/pdf', [SoalKuisController::class, 'exportPdf'])->name('soal_kuis.export.pdf');
    Route::get('/soal_kuis/soal_kuis', [SoalKuisController::class, 'index'])->name('soal_kuis.index');
    Route::get('/soal_kuis/update/{id}', [SoalKuisController::class, 'edit'])->name('soal_kuis.edit');
    Route::get('/soal_kuis/create', [SoalKuisController::class, 'create'])->name('soal_kuis.create');
    Route::put('/soal_kuis/update/{id}', [SoalKuisController::class, 'update'])->name('soal_kuis.update');
    Route::post('/soal_kuis', [SoalKuisController::class, 'store'])->name('soal_kuis.store');
    Route::delete('/soal_kuis/delete/{id}', [SoalKuisController::class, 'delete'])->name('soal_kuis.delete');

    // KKM Routes for Guru
    Route::get('/kkm', [KkmController::class, 'index'])->name('kkm.index');
    Route::post('/kkm', [KkmController::class, 'store'])->name('kkm.store');

    // Kelas Routes for Guru
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
    Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
    Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
});

Route::get('/data-pengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna')->middleware('admin');
Route::group(['middleware' => ['admin']], function () {
    Route::get('/data-pengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman about
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::middleware(['auth', 'check.user.level'])->group(function () {
    Route::get('/dashboard/data-pengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna');
});

// Cleaned up duplicate logout/login routes here


// Route::resource('soal_kuis', SoalKuisController::class);
Route::post('/simpan-nilai', [QuizController::class, 'simpanNilai'])->name('simpan-nilai');


Route::middleware('auth')->group(function () {
    Route::get('/guru_dashboard', function () {
        return view('/guru_dashboard'); // Tampilan dashboard guru
    })->name('/guru_dashboard');
});


Route::get('/bab_1/latihan1', function () {
    return view('bab_1.latihan1');
});
Route::get('/bab_1/latihan2', function () {
    return view('bab_1.latihan2');
});
Route::get('/bab_1/latihan3', function () {
    return view('bab_1.latihan3');
});
Route::get('/bab_1/latihan4', function () {
    return view('bab_1.latihan4');
});
Route::get('/bab_1/capaianpembelajaran', function () {
    return view('bab_1.capaianpembelajaran');
});
Route::get('/bab_1/petunjukapk', function () {
    return view('bab_1.petunjukapk');
})->name('bab1.petunjukapk');