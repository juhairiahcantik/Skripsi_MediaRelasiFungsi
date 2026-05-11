@extends('layouts.admin')

@section('title', 'List Soal Kuis')
@section('page-title', 'Soal Kuis')
@section('icon')
    <i class="bi bi-question-circle"></i>
@endsection

@section('back_button')
    <a href="/guru_dashboard" class="btn btn-outline-secondary btn-sm me-3 rounded-pill px-3">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
@endsection

@section('breadcrumb')

    <li class="breadcrumb-item active" aria-current="page">Soal Kuis</li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <a href="/soal_kuis/soal_kuis/" class="btn-entri mb-0">
                <i class="bi bi-plus-lg"></i> Tambah Soal
            </a>
        </div>
        <div class="d-flex gap-2">
            <form action="{{ route('soal_kuis.export.excel') }}" method="GET" style="margin: 0;">
                <input type="hidden" name="search" value="{{ request('search') }}">
                <input type="hidden" name="jenis_kuis" value="{{ request('jenis_kuis') }}">
                <button type="submit" class="btn btn-success btn-sm d-flex align-items-center gap-1">
                    <i class="fas fa-file-excel"></i> Excel
                </button>
            </form>
            <form action="{{ route('soal_kuis.export.pdf') }}" method="GET" style="margin: 0;">
                <input type="hidden" name="search" value="{{ request('search') }}">
                <input type="hidden" name="jenis_kuis" value="{{ request('jenis_kuis') }}">
                <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                    <i class="fas fa-file-pdf"></i> PDF
                </button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center gap-3">
                <div class="d-flex align-items-center gap-2">
                    <span class="text-secondary small">Show</span>
                    <select name="per_page" class="form-select form-select-sm" style="width: auto;"
                        onchange="updateFilters('per_page', this.value)">
                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ request('per_page', 10) == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ request('per_page', 10) == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('per_page', 10) == 100 ? 'selected' : '' }}>100</option>
                    </select>
                    <span class="text-secondary small">entries</span>
                </div>

                <div class="d-flex align-items-center gap-2 border-start ps-3">
                    <span class="text-secondary small">Pilih Kuis:</span>
                    <select name="jenis_kuis" class="form-select form-select-sm" style="width: auto;"
                        onchange="updateFilters('jenis_kuis', this.value)">
                        <option value="">Semua Kuis</option>
                        @foreach($quizTypes as $qType)
                            <option value="{{ $qType }}" {{ request('jenis_kuis') == $qType ? 'selected' : '' }}>{{ $qType }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="d-flex align-items-center gap-2">
                <form action="{{ route('soal_kuis.list') }}" method="GET" class="d-flex gap-2">
                    <span class="text-secondary small align-self-center">Search:</span>
                    <input type="search" name="search" class="form-control form-control-sm" style="width: 200px;" 
                        value="{{ request('search') }}" />
                    @if(request('per_page'))
                        <input type="hidden" name="per_page" value="{{ request('per_page') }}">
                    @endif
                    @if(request('jenis_kuis'))
                        <input type="hidden" name="jenis_kuis" value="{{ request('jenis_kuis') }}">
                    @endif
                    <button type="submit" class="btn btn-primary btn-sm px-3">Cari</button>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="quiz-table">
                <thead>
                    <tr>
                        <th width="10%">Jenis Kuis <i class="fas fa-sort"></i></th>
                        <th width="30%">Pertanyaan <i class="fas fa-sort"></i></th>
                        <th>Pilihan A <i class="fas fa-sort"></i></th>
                        <th>Pilihan B <i class="fas fa-sort"></i></th>
                        <th>Pilihan C <i class="fas fa-sort"></i></th>
                        <th>Pilihan D <i class="fas fa-sort"></i></th>
                        <th width="12%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($soalKuis as $soal)
                        <tr>
                            <td><span class="badge bg-light text-dark border">{{$soal->jenis_kuis}}</span></td>
                            <td class="small">{{$soal->pertanyaan}}</td>
                            <td class="small">{!!$soal->jawaban_benar === 'A' ? '<i class="fa-solid fa-square-check text-success"></i> ' : ''!!}{{$soal->pilihan_a}}</td>
                            <td class="small">{!!$soal->jawaban_benar === 'B' ? '<i class="fa-solid fa-square-check text-success"></i> ' : ''!!}{{$soal->pilihan_b}}</td>
                            <td class="small">{!!$soal->jawaban_benar === 'C' ? '<i class="fa-solid fa-square-check text-success"></i> ' : ''!!}{{$soal->pilihan_c}}</td>
                            <td class="small">{!!$soal->jawaban_benar === 'D' ? '<i class="fa-solid fa-square-check text-success"></i> ' : ''!!}{{$soal->pilihan_d}}</td>
                            <td>
                                <div class="action-btns">
                                    <a href="/soal_kuis/update/{{$soal->id}}" class="btn-action btn-edit" title="Ubah">Ubah</a>
                                    <button class="btn-action btn-delete delete-soal" id="{{$soal->id}}" title="Hapus">Hapus</button>
                                </div>
                                <form action="{{ route('soal_kuis.delete', ['id' => $soal->id]) }}" method="POST"
                                    id="form-del-{{$soal->id}}">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">
                                <i class="bi bi-info-circle me-2"></i> Data tidak ditemukan.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="small text-secondary">
                Showing {{ $soalKuis->firstItem() }} to {{ $soalKuis->lastItem() }} of {{ $soalKuis->total() }} entries
            </div>
            <div class="pagination-container">
                {{ $soalKuis->links('pagination.custom') }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function updateFilters(param, val) {
            const url = new URL(window.location.href);
            url.searchParams.set(param, val);
            url.searchParams.set('page', 1);
            window.location.href = url.href;
        }

        @if (session('success'))
            Swal.fire({
                text: "{{ session('success') }}",
                icon: "success"
            });
        @endif

        const btnDelete = document.querySelectorAll(".delete-soal");
        btnDelete.forEach(element => {
            element.addEventListener('click', () => {
                Swal.fire({
                    title: "Apakah anda yakin ingin menghapus soal ini?",
                    showDenyButton: true,
                    confirmButtonText: "Hapus",
                    denyButtonText: `Batal`
                }).then((result) => {
                    if (result.isConfirmed) {
                        const form = document.getElementById(`form-del-${element?.id}`);
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush