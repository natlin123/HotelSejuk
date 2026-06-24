@extends('layouts.admin')

@section('content')

<div class="mb-4">
    <h2 class="fw-bold">Edit Kamar</h2>
    <p class="text-muted">Perbarui data kamar hotel.</p>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Nomor Kamar</label>
                    <input type="text" name="nomor_kamar"
                        value="{{ $kamar->nomor_kamar }}"
                        class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tipe Kamar</label>
                    <select name="tipe_kamar_id" class="form-control" required>
                        @foreach($tipeKamars as $tipe)
                            <option value="{{ $tipe->id }}"
                                {{ $kamar->tipe_kamar_id == $tipe->id ? 'selected' : '' }}>
                                {{ $tipe->nama_tipe }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Tersedia" {{ $kamar->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="Terisi" {{ $kamar->status == 'Terisi' ? 'selected' : '' }}>Terisi</option>
                        <option value="Maintenance" {{ $kamar->status == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Kapasitas</label>
                    <input type="number" name="kapasitas"
                        value="{{ $kamar->kapasitas }}"
                        class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga"
                        value="{{ $kamar->harga }}"
                        class="form-control" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control">{{ $kamar->keterangan }}</textarea>
                </div>

            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-success">Update</button>
            </div>

        </form>

    </div>
</div>

@endsection
