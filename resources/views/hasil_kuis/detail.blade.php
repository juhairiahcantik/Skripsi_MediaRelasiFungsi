@php
    setlocale(LC_TIME, 'id_ID.UTF-8');
@endphp
@extends('layouts.admin')

@section('title', 'Riwayat ' . $type)
@section('page-title', 'Riwayat ' . $type)
@section('icon')
    <i class="bi bi-clock-history"></i>
@endsection

@section('back_button')
    <a href="{{ route('hasil_kuis.list') }}" class="btn btn-outline-secondary btn-sm me-3 rounded-pill px-3">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <div class="text-muted">
        Riwayat Percobaan: <strong>{{ $user->name }}</strong> ({{ $user->nim }})
    </div>
    <a href="{{ route('hasil_kuis.export.detail.excel', ['userId' => $user->id, 'type' => $type]) }}"
        class="btn btn-success btn-sm d-flex align-items-center gap-2 px-3">
        <i class="fas fa-file-excel"></i> Export Excel
    </a>
</div>

<div class="card p-0 overflow-hidden">
    <div class="table-responsive">
        <table class="quiz-table">
            <thead>
                <tr>
                    <th class="text-center">Percobaan</th>
                    <th class="text-center">Tanggal Pengerjaan</th>
                    <th class="text-center">Nilai</th>
                    <th class="text-center">Status</th>
                    @for($i = 1; $i <= 10; $i++)
                        <th class="text-center">S{{ $i }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @php
                    $questionCorrectCount = array_fill(1, 10, 0);
                    $totalAttempts = $attempts->count();
                @endphp

                @forelse($attempts as $index => $at)
                    <tr>
                        <td class="text-center text-muted">Ke-{{ $index + 1 }}</td>
                        <td class="text-center">{{ $at->created_at->format('d/m/Y H:i') }}</td>
                        <td class="text-center fw-bold text-dark">{{ round($at->nilai) }}</td>
                        <td class="text-center">
                            @if($at->nilai >= 70)
                                <span class="badge bg-success rounded-pill px-3">Lulus</span>
                            @else
                                <span class="badge bg-danger rounded-pill px-3">Tidak Lulus</span>
                            @endif
                        </td>
                        @for($i = 1; $i <= 10; $i++)
                            @php
                                $isCorrect = false;
                                if ($at->jawaban && isset($at->jawaban[$i - 1])) {
                                    $isCorrect = $at->jawaban[$i - 1]['is_benar'] ?? false;
                                }
                                if ($isCorrect)
                                    $questionCorrectCount[$i]++;
                            @endphp
                            <td class="text-center">
                                @if($isCorrect)
                                    <i class="fa-solid fa-check text-success fs-5"></i>
                                @else
                                    <i class="fa-solid fa-xmark text-danger fs-5"></i>
                                @endif
                            </td>
                        @endfor
                    </tr>
                @empty
                    <tr>
                        <td colspan="16" class="text-center py-5 text-muted">Belum ada riwayat pengerjaan.</td>
                    </tr>
                @endforelse
            </tbody>
            @if($totalAttempts > 0)
                <tfoot style="background-color: #F8F9FA;">
                    <tr class="fw-bold">
                        <td colspan="4" class="p-3 text-end text-dark">Persentase Benar Mahasiswa (%)</td>
                        @for($i = 1; $i <= 10; $i++)
                            <td class="p-3 text-center text-primary" style="color: var(--primary-color) !important;">
                                {{ round(($questionCorrectCount[$i] / $totalAttempts) * 100) }}%
                            </td>
                        @endfor
                    </tr>
                </tfoot>
            @endif
        </table>
    </div>
</div>
@endsection