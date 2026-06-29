@extends('layouts.admin')

@section('content')

<div class="mb-4">

    <h2 class="fw-bold">
        Edit Tipe Kamar
    </h2>

    <p class="text-muted">
        Perbarui data tipe kamar.
    </p>

</div>

<div class="card card-dashboard p-4">

<form action="{{ route('tipe.update', $tipe->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-md-6 mb-3">

            <label class="form-label">
                Nama Tipe
            </label>

            <input
                type="text"
                name="nama_tipe"
                class="form-control"
                value="{{ $tipe->nama_tipe }}"
                required>

        </div>

        <div class="col-md-6 mb-3">

            <label class="form-label">
                Harga / Malam
            </label>

            <input
                type="number"
                name="harga"
                class="form-control"
                value="{{ $tipe->harga }}"
                required>

        </div>

        <div class="col-md-6 mb-3">

            <label class="form-label">
                Kapasitas
            </label>

            <input
                type="number"
                name="kapasitas"
                class="form-control"
                value="{{ $tipe->kapasitas }}"
                required>

        </div>

        <div class="col-md-12 mb-3">

            <label class="form-label">
                Fasilitas
            </label>

            <textarea
                name="fasilitas"
                class="form-control"
                rows="4">{{ $tipe->fasilitas }}</textarea>

        </div>

    </div>

    <div class="d-flex gap-2">

        <button type="submit"
                class="btn btn-success">
            Update
        </button>

        <a href="{{ route('tipe.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </div>

</form>

</div>

@endsection
