@extends('layouts.admin')

@section('title', 'Master Kelas')
@section('page-title', 'Master Kelas')
@section('icon')
    <i class="bi bi-bookmarks"></i>
@endsection

@section('back_button')
    <a href="/guru_dashboard" class="btn btn-outline-secondary btn-sm me-3 rounded-pill px-3">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <button class="btn btn-entri mb-0" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="bi bi-plus-lg"></i> Tambah Kelas
            </button>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card p-0 overflow-hidden">
        <div class="table-responsive">
            <table class="quiz-table">
                <thead>
                    <tr>
                        <th width="10%" class="text-center">No</th>
                        <th>Nama Kelas</th>
                        <th width="20%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kelas as $k)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td><span class="fw-bold text-dark">{{ $k->kelas }}</span></td>
                        <td class="text-center">
                            <div class="action-btns d-flex justify-content-center gap-2">
                                <button class="btn-action btn-edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $k->id }}">
                                    Ubah
                                </button>
                                <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus kelas ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $k->id }}" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
                                <form action="{{ route('kelas.update', $k->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header border-0 pb-0 ps-4">
                                        <h5 class="modal-title fw-bold">Edit Kelas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="mb-0">
                                            <label class="form-label small fw-bold text-uppercase">Nama Kelas</label>
                                            <input type="text" name="kelas" class="form-control" value="{{ $k->kelas }}" style="border-radius: 10px;" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0 p-4 pt-0">
                                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-entri">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-5 text-muted">
                            <i class="bi bi-info-circle me-2"></i> Kelas belum ada data.
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
                <form action="{{ route('kelas.store') }}" method="POST">
                    @csrf
                    <div class="modal-header border-0 pb-0 ps-4">
                        <h5 class="modal-title fw-bold">Tambah Kelas Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="mb-0">
                            <label class="form-label small fw-bold text-uppercase">Nama Kelas</label>
                            <input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas" style="border-radius: 10px;" required>
                        </div>
                    </div>
                    <div class="modal-footer border-0 p-4 pt-0">
                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-entri">Simpan Kelas</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
