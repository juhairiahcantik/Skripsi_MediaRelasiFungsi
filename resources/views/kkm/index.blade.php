@extends('layouts.admin')

@section('title', 'Pengaturan KKM')
@section('page-title', 'Pengaturan KKM')
@section('icon')
    <i class="bi bi-shield-check"></i>
@endsection

@section('back_button')
    <a href="/guru_dashboard" class="btn btn-outline-secondary btn-sm me-3 rounded-pill px-3">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
@endsection

@section('content')
<div class="row">
    <div class="col-12">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card p-4">
            <p class="text-secondary mb-4">Tentukan standar Nilai Kriteria Ketuntasan Minimal (KKM) untuk setiap penilaian.</p>
            
            <form action="{{ route('kkm.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                    @foreach($categories as $category)
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label class="form-label fw-bold small text-uppercase mb-2">{{ $category }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-secondary" style="border-radius: 10px 0 0 10px;">
                                    <i class="bi bi-pencil-square"></i>
                                </span>
                                <input type="number" name="nilai[{{ $category }}]" 
                                       class="form-control border-start-0" 
                                       style="border-radius: 0 10px 10px 0;"
                                       value="{{ $kkms->has($category) ? $kkms[$category]->nilai : '' }}" 
                                       placeholder="Contoh: 75"
                                       min="0" max="100" required>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-entri w-100 py-3 shadow-sm border-0">
                        <i class="bi bi-save2 me-2"></i> Simpan Perubahan KKM
                    </button>
                    <p class="text-muted small mt-3">
                        <i class="bi bi-info-circle me-1"></i> Penilaian tanpa KKM yang diatur akan dianggap tidak memiliki standar kelulusan.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
