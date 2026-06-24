@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold">Daftar Kamar</h2>
        <p class="text-muted">
            Kelola ketersediaan dan status kamar hotel.
        </p>
    </div>

    <a href="{{ route('kamar.create') }}"
       class="btn btn-success">
        + Tambah Kamar
    </a>

</div>

<div class="row mb-4">

    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <small>Total Kamar</small>
                <h2 class="fw-bold">
                    {{ $totalKamar }}
                </h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <small>Kamar Tersedia</small>
                <h2 class="fw-bold text-success">
                    {{ $tersedia }}
                </h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <small>Kamar Terisi</small>
                <h2 class="fw-bold text-warning">
                    {{ $terisi }}
                </h2>
            </div>
        </div>
    </div>

</div>

<div class="card shadow-sm border-0">

    <div class="card-body">

        <table class="table align-middle">

            <thead class="table-light">

                <tr>

                    <th>No. Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Kapasitas</th>
                    <th>Harga / Malam</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($kamars as $kamar)

                <tr>

                    <td>
                        {{ $kamar->nomor_kamar }}
                    </td>

                    <td>
                        {{ $kamar->tipeKamar->nama_tipe ?? '-' }}
                    </td>

                    <td>
                        {{ $kamar->tipeKamar->kapasitas ?? '-' }} Orang
                    </td>

                    <td>
                        Rp {{ number_format($kamar->tipeKamar->harga ?? 0,0,',','.') }}
                    </td>

                    <td>

                        @if($kamar->status == 'Tersedia')

                            <span class="badge bg-success">
                                Tersedia
                            </span>

                        @elseif($kamar->status == 'Terisi')

                            <span class="badge bg-danger">
                                Terisi
                            </span>

                        @else

                            <span class="badge bg-warning text-dark">
                                Maintenance
                            </span>

                        @endif

                    </td>

                    <td>

                        <a href="{{ route('kamar.edit',$kamar->id) }}"
                           class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <form action="{{ route('kamar.destroy',$kamar->id) }}"
                              method="POST"
                              style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Hapus kamar ini?')">

                                <i class="bi bi-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center text-muted">
                        Belum ada data kamar
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection
