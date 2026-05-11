@extends('layouts.admin')

@section('title', $type . ' Pengguna')
@section('page-title', $type . ' Pengguna')
@section('icon')
    <i class="bi bi-person-plus"></i>
@endsection

@section('back_button')
    <a href="{{ route('user.list') }}" class="btn btn-outline-secondary btn-sm me-3 rounded-pill px-3">
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
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <!-- Pilih Role -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="role">Sebagai</label>
                        <select name="role" id="role" class="form-select @error('role') is-invalid @enderror" style="border-radius: 10px; padding: 12px;" required>
                            <option value="siswa" {{ old('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                            <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- NISN/NUPTK -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="nim">NISN / NUPTK</label>
                        <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}" style="border-radius: 10px; padding: 12px;" placeholder="Masukkan nomor identitas..." required>
                        @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" style="border-radius: 10px; padding: 12px;" placeholder="Masukkan nama lengkap..." required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kelas -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="kelas">Kelas</label>
                        <select name="kelas" id="kelas" class="form-select @error('kelas') is-invalid @enderror" style="border-radius: 10px; padding: 12px;">
                            <option value="">Pilih Kelas</option>
                            @foreach($kelasList as $k)
                                <option value="{{ $k->kelas }}" {{ old('kelas') == $k->kelas ? 'selected' : '' }}>{{ $k->kelas }}</option>
                            @endforeach
                        </select>
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <!-- Password -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" style="border-radius: 10px; padding: 12px;" placeholder="Minimal 8 karakter..." required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" style="border-radius: 10px; padding: 12px;" placeholder="Ulangi password..." required>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-entri w-100 py-3 shadow-sm border-0">
                        <i class="bi bi-person-check me-2"></i> Simpan Pengguna Baru
                    </button>
                </div>
            </form>
            @else
            <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-4">
                    <!-- Role -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="role">Sebagai</label>
                        <select name="role" id="role" class="form-select" style="border-radius: 10px; padding: 12px;" required>
                            <option value="siswa" {{ (old('role') ?? $user->role) == 'siswa' ? 'selected' : '' }}>Siswa</option>
                            <option value="guru" {{ (old('role') ?? $user->role) == 'guru' ? 'selected' : '' }}>Guru</option>
                        </select>
                    </div>

                    <!-- NISN/NUPTK -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="nim">NISN / NUPTK</label>
                        <input type="text" name="nim" id="nim" class="form-control" value="{{ old('nim') ?? $user->nim }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>

                    <!-- Nama -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $user->name }}" style="border-radius: 10px; padding: 12px;" required>
                    </div>

                    <!-- Kelas -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="kelas">Kelas</label>
                        <select name="kelas" id="kelas" class="form-select" style="border-radius: 10px; padding: 12px;">
                            <option value="">Pilih Kelas</option>
                            @foreach($kelasList as $k)
                                <option value="{{ $k->kelas }}" {{ (old('kelas') ?? $user->kelas) == $k->kelas ? 'selected' : '' }}>{{ $k->kelas }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!-- Password -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="password">Password Baru <span class="text-secondary fw-normal">(Opsional)</span></label>
                        <input type="password" name="password" id="password" class="form-control" style="border-radius: 10px; padding: 12px;" placeholder="Kosongkan jika tidak diubah">
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase" for="password_confirmation">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" style="border-radius: 10px; padding: 12px;" placeholder="Ulangi password baru">
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-entri w-100 py-3 shadow-sm border-0">
                        <i class="bi bi-save me-2"></i> Perbarui Data Pengguna
                    </button>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection