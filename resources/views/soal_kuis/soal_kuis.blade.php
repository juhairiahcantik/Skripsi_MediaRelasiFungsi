@extends('layouts.admin')

@section('title', $type . ' Soal Kuis')
@section('page-title', $type . ' Soal Kuis')
@section('icon')
    <i class="bi bi-pencil-square"></i>
@endsection

@section('back_button')
    <a href="{{ route('soal_kuis.list') }}" class="btn btn-outline-secondary btn-sm me-3 rounded-pill px-3">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card p-4">
            @if ($type === 'Tambah')
            <form action="{{ route('soal_kuis.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <!-- Pilih Jenis Kuis -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="jenis_kuis">Jenis Kuis</label>
                        <select name="jenis_kuis" id="jenis_kuis" class="form-select" style="border-radius: 10px; padding: 12px;" required>
                            <option value="Kuis 1" {{ old('jenis_kuis') == 'Kuis 1' ? 'selected' : '' }}>Kuis 1</option>
                            <option value="Kuis 2" {{ old('jenis_kuis') == 'Kuis 2' ? 'selected' : '' }}>Kuis 2</option>
                            <option value="Kuis 3" {{ old('jenis_kuis') == 'Kuis 3' ? 'selected' : '' }}>Kuis 3</option>
                            <option value="Kuis 4" {{ old('jenis_kuis') == 'Kuis 4' ? 'selected' : '' }}>Kuis 4</option>
                            <option value="Evaluasi" {{ old('jenis_kuis') == 'Evaluasi' ? 'selected' : '' }}>Evaluasi</option>
                        </select>
                    </div>

                    <!-- Jawaban Benar -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="jawaban_benar">Jawaban Benar</label>
                        <select name="jawaban_benar" id="jawaban_benar" class="form-select" style="border-radius: 10px; padding: 12px;" required>
                            <option value="A" {{ old('jawaban_benar') == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ old('jawaban_benar') == 'B' ? 'selected' : '' }}>B</option>
                            <option value="C" {{ old('jawaban_benar') == 'C' ? 'selected' : '' }}>C</option>
                            <option value="D" {{ old('jawaban_benar') == 'D' ? 'selected' : '' }}>D</option>
                        </select>
                    </div>

                    <!-- Pertanyaan -->
                    <div class="col-12">
                        <label class="form-label fw-bold small text-uppercase" for="pertanyaan">Pertanyaan</label>
                        <textarea name="pertanyaan" id="pertanyaan" class="form-control" rows="4" style="border-radius: 10px; padding: 15px;" placeholder="Masukkan pertanyaan soal kuis..." required>{{ old('pertanyaan') }}</textarea>
                    </div>

                    <!-- Pilihan A & B -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="pilihan_a">Pilihan A</label>
                        <input type="text" name="pilihan_a" id="pilihan_a" class="form-control" value="{{ old('pilihan_a') }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="pilihan_b">Pilihan B</label>
                        <input type="text" name="pilihan_b" id="pilihan_b" class="form-control" value="{{ old('pilihan_b') }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>

                    <!-- Pilihan C & D -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="pilihan_c">Pilihan C</label>
                        <input type="text" name="pilihan_c" id="pilihan_c" class="form-control" value="{{ old('pilihan_c') }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="pilihan_d">Pilihan D</label>
                        <input type="text" name="pilihan_d" id="pilihan_d" class="form-control" value="{{ old('pilihan_d') }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-entri w-100 py-3 shadow-sm border-0">
                        <i class="bi bi-save me-2"></i> Simpan Soal Kuis
                    </button>
                </div>
            </form>
            @else
            <form action="{{ route('soal_kuis.update', ['id' => $kuis->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-4">
                    <!-- Pilih Jenis Kuis -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="jenis_kuis">Jenis Kuis</label>
                        <select name="jenis_kuis" id="jenis_kuis" class="form-select" style="border-radius: 10px; padding: 12px;" required>
                            <option value="Kuis 1" {{ (old('jenis_kuis') ?? $kuis->jenis_kuis) == 'Kuis 1' ? 'selected' : '' }}>Kuis 1</option>
                            <option value="Kuis 2" {{ (old('jenis_kuis') ?? $kuis->jenis_kuis) == 'Kuis 2' ? 'selected' : '' }}>Kuis 2</option>
                            <option value="Kuis 3" {{ (old('jenis_kuis') ?? $kuis->jenis_kuis) == 'Kuis 3' ? 'selected' : '' }}>Kuis 3</option>
                            <option value="Kuis 4" {{ (old('jenis_kuis') ?? $kuis->jenis_kuis) == 'Kuis 4' ? 'selected' : '' }}>Kuis 4</option>
                            <option value="Evaluasi" {{ (old('jenis_kuis') ?? $kuis->jenis_kuis) == 'Evaluasi' ? 'selected' : '' }}>Evaluasi</option>
                        </select>
                    </div>

                    <!-- Jawaban Benar -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="jawaban_benar">Jawaban Benar</label>
                        <select name="jawaban_benar" id="jawaban_benar" class="form-select" style="border-radius: 10px; padding: 12px;" required>
                            <option value="A" {{ (old('jawaban_benar') ?? $kuis->jawaban_benar) == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ (old('jawaban_benar') ?? $kuis->jawaban_benar) == 'B' ? 'selected' : '' }}>B</option>
                            <option value="C" {{ (old('jawaban_benar') ?? $kuis->jawaban_benar) == 'C' ? 'selected' : '' }}>C</option>
                            <option value="D" {{ (old('jawaban_benar') ?? $kuis->jawaban_benar) == 'D' ? 'selected' : '' }}>D</option>
                        </select>
                    </div>

                    <!-- Pertanyaan -->
                    <div class="col-12">
                        <label class="form-label fw-bold small text-uppercase" for="pertanyaan">Pertanyaan</label>
                        <textarea name="pertanyaan" id="pertanyaan" class="form-control" rows="4" style="border-radius: 10px; padding: 15px;" required>{{ old('pertanyaan') ?? $kuis->pertanyaan }}</textarea>
                    </div>

                    <!-- Pilihan A & B -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="pilihan_a">Pilihan A</label>
                        <input type="text" name="pilihan_a" id="pilihan_a" class="form-control" value="{{ old('pilihan_a') ?? $kuis->pilihan_a }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="pilihan_b">Pilihan B</label>
                        <input type="text" name="pilihan_b" id="pilihan_b" class="form-control" value="{{ old('pilihan_b') ?? $kuis->pilihan_b }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>

                    <!-- Pilihan C & D -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="pilihan_c">Pilihan C</label>
                        <input type="text" name="pilihan_c" id="pilihan_c" class="form-control" value="{{ old('pilihan_c') ?? $kuis->pilihan_c }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="pilihan_d">Pilihan D</label>
                        <input type="text" name="pilihan_d" id="pilihan_d" class="form-control" value="{{ old('pilihan_d') ?? $kuis->pilihan_d }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-entri w-100 py-3 shadow-sm border-0">
                        <i class="bi bi-save me-2"></i> Perbarui Soal Kuis
                    </button>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
