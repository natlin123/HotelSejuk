@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold">
            Daftar Tipe Kamar
        </h2>

        <p class="text-muted">
            Atur kategori kamar dan harga sewa per malam.
        </p>
    </div>

    <a href="{{ route('tipe.create') }}"
       class="btn btn-success">
        + Tambah Tipe Kamar
    </a>

</div>

<div class="row mb-4">

    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <small>Total</small>
                <h2 class="fw-bold">{{ $total }}</h2>
                <span class="text-muted">
                    Tipe Kamar Aktif
                </span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <small>Mulai Dari</small>
                <h2 class="fw-bold">
                    Rp {{ number_format($termurah ?? 0,0,',','.') }}
                </h2>
                <span class="text-muted">
                    Harga Termurah / Malam
                </span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <small>Hingga</small>
                <h2 class="fw-bold">
                    Rp {{ number_format($termahal ?? 0,0,',','.') }}
                </h2>
                <span class="text-muted">
                    Harga Termahal / Malam
                </span>
            </div>
        </div>
    </div>

</div>

<div class="card shadow-sm border-0">

    <div class="card-body">

        <table class="table table-hover align-middle">

            <thead class="table-light">
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Kapasitas</th>
                    <th>Harga / Malam</th>
                    <th>Jumlah Kamar</th>
                    <th width="120">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($tipe as $t)

                <tr>

                    <td>
                        <strong>{{ $t->nama_tipe }}</strong>
                    </td>

                    <td>
                        <span class="badge bg-info">
                            {{ $t->kapasitas }} Orang
                        </span>
                    </td>

                    <td>
                        Rp {{ number_format($t->harga,0,',','.') }}
                    </td>

                    <td>
                        {{ \App\Models\Kamar::where('tipe_kamar_id',$t->id)->count() }}
                    </td>

                    <td>

                        <a href="{{ route('tipe.edit',$t->id) }}"
                           class="btn btn-sm btn-outline-primary">
                            ✏
                        </a>

                        <form action="{{ route('tipe.destroy',$t->id) }}"
                              method="POST"
                              style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Hapus tipe kamar ini?')">
                                🗑
                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">
                        Belum ada data tipe kamar
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection
