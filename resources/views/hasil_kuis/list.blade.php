@php
    setlocale(LC_TIME, 'id_ID.UTF-8');
@endphp

@extends('layouts.admin')

@section('title', 'Hasil Kuis')
@section('page-title', 'Hasil Kuis')
@section('icon')
    <i class="bi bi-trophy"></i>
@endsection

@section('back_button')
    <a href="/guru_dashboard" class="btn btn-outline-secondary btn-sm me-3 rounded-pill px-3">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
@endsection

@push('styles')
<style>
    /* ================= HASIL KUIS PAGE ================= */

    .result-action-bar {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 10px;
        margin-bottom: 26px;
    }

    .result-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 30px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(0, 0, 0, 0.04);

        /* penting agar dropdown tidak kepotong */
        overflow: visible !important;
        position: relative;
        z-index: 1;
    }

    .result-filter {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 18px;
        margin-bottom: 34px;
    }

    .filter-left,
    .filter-right {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 14px;
    }

    .filter-group {
        display: flex;
        align-items: center;
        gap: 9px;
    }

    .filter-divider {
        border-left: 1px solid #dee2e6;
        padding-left: 18px;
    }

    .result-card .form-select,
    .result-card .form-control {
        min-height: 38px;
        border-radius: 6px;
        border: 1px solid #d8dee4;
        box-shadow: none;
        font-size: 0.95rem;
    }

    .result-card .form-control:focus,
    .result-card .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.15rem rgba(177, 111, 226, 0.18);
    }

    .btn-search-result {
        min-height: 38px;
        padding: 6px 18px;
        border-radius: 6px;
        font-weight: 600;
        background-color: #0d6efd;
        border: none;
    }

    .btn-export {
        min-height: 38px;
        border-radius: 5px;
        font-weight: 700;
        padding: 7px 13px;
    }

    /*
        Ini pengganti table-responsive biasa.
        Kalau pakai overflow-x:auto terus parent-nya sempit,
        dropdown bisa terpotong. Jadi desktop dibuat visible.
    */
    .result-table-wrap {
        width: 100%;
        overflow: visible !important;
        position: relative;
    }

    .quiz-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        min-width: 1050px;
        font-size: 0.95rem;
        color: #212529;
    }

    .quiz-table thead th {
        background: #b46ee7;
        color: #ffffff;
        font-weight: 700;
        padding: 16px 18px;
        border: none;
        white-space: nowrap;
        vertical-align: middle;
    }

    .quiz-table thead th:first-child {
        border-top-left-radius: 10px;
    }

    .quiz-table thead th:last-child {
        border-top-right-radius: 10px;
    }

    .quiz-table tbody td {
        padding: 18px;
        border-bottom: 1px solid #edf0f3;
        vertical-align: middle;
        background: #ffffff;

        /* penting agar dropdown dari kolom riwayat tidak ketahan */
        overflow: visible !important;
    }

    .quiz-table tbody tr {
        overflow: visible !important;
    }

    .quiz-table tbody tr:hover td {
        background: #fbf8ff;
    }

    .quiz-table code {
        color: #6f42c1;
        background: #f3ecff;
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 0.88rem;
    }

    .history-btn {
        color: var(--primary-color) !important;
        transition: 0.2s ease;
    }

    .history-btn:hover {
        transform: scale(1.08);
        color: #7b2cbf !important;
    }

    .dropdown {
        position: relative;
        z-index: 9999;
    }

    .dropdown-menu {
        z-index: 99999 !important;
        min-width: 190px;
        border-radius: 10px;
        padding: 8px 0;
        border: none;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    .dropdown-menu .dropdown-header {
        color: #6c757d;
        font-weight: 700;
        padding: 10px 18px;
    }

    .dropdown-menu .dropdown-item {
        padding: 10px 18px;
        font-size: 0.95rem;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f7f2ff;
        color: var(--primary-color);
    }

    .result-pagination {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-top: 24px;
        flex-wrap: wrap;
    }

    /* ================= RESPONSIVE TABLET / HP ================= */

    @media (max-width: 991px) {
        .result-card {
            padding: 22px;
            border-radius: 16px;
        }

        .result-filter {
            align-items: stretch;
            margin-bottom: 24px;
        }

        .filter-left,
        .filter-right {
            width: 100%;
        }

        .filter-divider {
            border-left: none;
            padding-left: 0;
        }

        /*
            Di layar kecil tabel tetap bisa digeser.
            Padding bawah ditambah supaya dropdown tidak langsung kepotong.
        */
        .result-table-wrap {
            overflow-x: auto !important;
            overflow-y: visible !important;
            padding-bottom: 170px;
            margin-bottom: -150px;
        }

        .quiz-table {
            font-size: 0.88rem;
            min-width: 1000px;
        }

        .quiz-table thead th,
        .quiz-table tbody td {
            padding: 14px;
        }
    }

    @media (max-width: 768px) {
        .result-action-bar {
            justify-content: flex-start;
            margin-bottom: 18px;
        }

        .filter-left,
        .filter-right,
        .filter-group,
        .filter-right form {
            width: 100%;
        }

        .filter-right form {
            display: flex;
            gap: 8px;
        }

        .filter-right input {
            width: 100% !important;
        }

        .result-pagination {
            justify-content: center;
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .result-card {
            padding: 18px;
        }

        .result-card .form-select,
        .result-card .form-control {
            font-size: 0.88rem;
        }

        .btn-search-result,
        .btn-export {
            font-size: 0.85rem;
        }
    }
</style>
@endpush

@section('content')

<div class="result-action-bar">
    <a href="{{ route('hasil_kuis.export.excel') }}"
       class="btn btn-success btn-sm btn-export d-flex align-items-center gap-1">
        <i class="fas fa-file-excel"></i> Excel
    </a>
</div>

<div class="result-card">
    <div class="result-filter">

        <div class="filter-left">
            <div class="filter-group">
                <span class="text-secondary">Tampilkan</span>

                <select name="per_page"
                        class="form-select form-select-sm"
                        style="width: auto;"
                        onchange="updateFilters('per_page', this.value)">
                    <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('per_page', 10) == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request('per_page', 10) == 50 ? 'selected' : '' }}>50</option>
                </select>

                <span class="text-secondary">data</span>
            </div>

            <div class="filter-group filter-divider">
                <span class="text-secondary">Pilih Kelas:</span>

                <select name="kelas"
                        class="form-select form-select-sm"
                        style="width: auto;"
                        onchange="updateFilters('kelas', this.value)">
                    <option value="">Semua Kelas</option>

                    @foreach($kelasList as $k)
                        <option value="{{ $k->kelas }}" {{ request('kelas') == $k->kelas ? 'selected' : '' }}>
                            {{ $k->kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="filter-right">
            <form action="{{ route('hasil_kuis.list') }}" method="GET" class="d-flex gap-2">
                <input type="search"
                       name="search"
                       class="form-control form-control-sm"
                       style="width: 220px;"
                       placeholder="Nama / NIS..."
                       value="{{ request('search') }}" />

                @if(request('per_page'))
                    <input type="hidden" name="per_page" value="{{ request('per_page') }}">
                @endif

                @if(request('kelas'))
                    <input type="hidden" name="kelas" value="{{ request('kelas') }}">
                @endif

                <button type="submit" class="btn btn-primary btn-sm btn-search-result">
                    Cari
                </button>
            </form>
        </div>

    </div>

    <div class="result-table-wrap">
        <table class="quiz-table">
            <thead>
                <tr>
                    <th width="60" class="text-center">No</th>
                    <th>Nama Siswa</th>
                    <th class="text-center">NIS</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">K1</th>
                    <th class="text-center">K2</th>
                    <th class="text-center">K3</th>
                    <th class="text-center">K4</th>
                    <th class="text-center">Evaluasi</th>
                    <th class="text-center">Riwayat</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $quizKeys = ['Kuis 1', 'Kuis 2', 'Kuis 3', 'Kuis 4', 'Evaluasi'];
                @endphp

                @forelse($users as $index => $u)
                    <tr>
                        <td class="text-center">
                            {{ $users->firstItem() + $index }}
                        </td>

                        <td class="fw-bold text-dark">
                            {{ $u->name }}
                        </td>

                        <td class="text-center">
                            <code>{{ $u->nim }}</code>
                        </td>

                        <td class="text-center">
                            {{ $u->kelas ?? '-' }}
                        </td>

                        @foreach($quizKeys as $key)
                            <td class="text-center">
                                @php
                                    $score = $u->scores[$key] ?? null;
                                @endphp

                                <span class="fw-bold {{ $score === null ? 'text-muted' : ($score > 0 ? 'text-success' : 'text-danger') }}">
                                    {{ $score ?? '0' }}
                                </span>
                            </td>
                        @endforeach

                        <td class="text-center">
                            <div class="dropdown">
                                <button class="p-0 border-0 bg-transparent history-btn"
                                        data-bs-toggle="dropdown"
                                        data-bs-boundary="viewport"
                                        data-bs-display="dynamic"
                                        type="button">
                                    <i class="fas fa-clock fs-5"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <h6 class="dropdown-header">Riwayat Kuis</h6>
                                    </li>

                                    @foreach($quizKeys as $key)
                                        <li>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center"
                                               href="{{ route('hasil_kuis.detail', ['userId' => $u->id, 'type' => $key]) }}">
                                                <span>{{ $key }}</span>

                                                @if(isset($u->scores[$key]))
                                                    <span class="badge rounded-pill ms-2"
                                                          style="background-color: var(--primary-color);">
                                                        {{ round($u->scores[$key]) }}
                                                    </span>
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center py-5 text-muted">
                            Data tidak ditemukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="result-pagination">
        <div class="small text-secondary">
            Showing {{ $users->firstItem() ?? 0 }} to {{ $users->lastItem() ?? 0 }} of {{ $users->total() }} entries
        </div>

        <div class="pagination-container">
            {{ $users->links('pagination.custom') }}
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
</script>
@endpush