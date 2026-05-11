@extends('layouts.admin')

@section('title', 'Data Pengguna')
@section('page-title', 'Pengguna')
@section('icon')
    <i class="bi bi-people"></i>
@endsection

@section('back_button')
    <a href="/guru_dashboard" class="btn btn-outline-secondary btn-sm me-3 rounded-pill px-3">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
@endsection

@section('breadcrumb')

    <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <a href="/user/create/" class="btn-entri mb-0">
                <i class="bi bi-plus-lg"></i> Tambah Pengguna
            </a>
        </div>
        <div class="d-flex gap-2">
            <form action="{{ route('user.export.excel') }}" method="GET" style="margin: 0;">
                <input type="hidden" name="search" value="{{ request('search') }}">
                <input type="hidden" name="role" value="{{ request('role') }}">
                <button type="submit" class="btn btn-success btn-sm d-flex align-items-center gap-1">
                    <i class="fas fa-file-excel"></i> Excel
                </button>
            </form>
            <form action="{{ route('user.export.pdf') }}" method="GET" style="margin: 0;">
                <input type="hidden" name="search" value="{{ request('search') }}">
                <input type="hidden" name="role" value="{{ request('role') }}">
                <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                    <i class="fas fa-file-pdf"></i> PDF
                </button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div class="d-flex flex-wrap align-items-center gap-3">
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
                    <span class="text-secondary small">Role:</span>
                    <select name="role" class="form-select form-select-sm" style="width: auto;"
                        onchange="updateFilters('role', this.value)">
                        <option value="">Semua Role</option>
                        @foreach($roles as $r)
                            <option value="{{ $r }}" {{ request('role') == $r ? 'selected' : '' }}>{{ $r }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex align-items-center gap-2 border-start ps-3">
                    <span class="text-secondary small">Kelas:</span>
                    <select name="kelas" class="form-select form-select-sm" style="width: auto;"
                        onchange="updateFilters('kelas', this.value)">
                        <option value="">Semua Kelas</option>
                        @foreach($kelasList as $k)
                            <option value="{{ $k->kelas }}" {{ request('kelas') == $k->kelas ? 'selected' : '' }}>{{ $k->kelas }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="d-flex align-items-center gap-2">
                <form action="{{ route('user.list') }}" method="GET" class="d-flex gap-2">
                    <span class="text-secondary small align-self-center">Search:</span>
                    <input type="search" name="search" class="form-control form-control-sm" style="width: 200px;" 
                        placeholder="Nama atau NIM..." value="{{ request('search') }}" />
                    @if(request('per_page'))
                        <input type="hidden" name="per_page" value="{{ request('per_page') }}">
                    @endif
                    @if(request('role'))
                        <input type="hidden" name="role" value="{{ request('role') }}">
                    @endif
                    @if(request('kelas'))
                        <input type="hidden" name="kelas" value="{{ request('kelas') }}">
                    @endif
                    <button type="submit" class="btn btn-primary btn-sm px-3">Cari</button>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="quiz-table">
                <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Nama <i class="fas fa-sort"></i></th>
                        <th>NISN/NUPTK <i class="fas fa-sort"></i></th>
                        <th>Role <i class="fas fa-sort"></i></th>
                        <th>Kelas <i class="fas fa-sort"></i></th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = $user->firstItem(); @endphp
                    @forelse ($user as $usr)
                        <tr>
                            <td class="text-secondary">{{ $no++ }}</td>
                            <td>
                                <div class="fw-bold text-dark">{{$usr->name}}</div>
                            </td>
                            <td><code>{{$usr->nim}}</code></td>
                            <td>
                                <span class="badge {{ $usr->role == 'guru' ? 'bg-primary' : 'bg-info' }} rounded-pill px-3">
                                    {{$usr->role}}
                                </span>
                            </td>
                            <td>{{$usr->kelas ?? '-'}}</td>
                            <td>
                                <div class="action-btns">
                                    <a href="/user/update/{{$usr->id}}" class="btn-action btn-edit">Ubah</a>
                                    <button class="btn-action btn-delete delete-user" id="{{$usr->id}}">Hapus</button>
                                </div>
                                <form action="{{ route('user.delete', ['id' => $usr->id]) }}" method="POST"
                                    id="form-del-{{$usr->id}}">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="bi bi-info-circle me-2"></i> Data tidak ditemukan.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="small text-secondary">
                Showing {{ $user->firstItem() }} to {{ $user->lastItem() }} of {{ $user->total() }} entries
            </div>
            <div class="pagination-container">
                {{ $user->links('pagination.custom') }}
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

        const btnDelete = document.querySelectorAll(".delete-user");
        btnDelete.forEach(element => {
            element.addEventListener('click', () => {
                Swal.fire({
                    title: "Apakah anda yakin ingin menghapus pengguna ini?",
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