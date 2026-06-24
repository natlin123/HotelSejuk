@extends('layouts.admin')

@section('content')

<div class="mb-4">

    <h2 class="fw-bold">
        Tambah Tipe Kamar
    </h2>

    <p class="text-muted">
        Tambahkan tipe kamar dan harga hotel.
    </p>

</div>

<div class="card card-dashboard p-4">

<form action="{{ route('tipe.store') }}" method="POST">

@csrf

<div class="row">

    <div class="col-md-6 mb-3">

        <label class="form-label">
            Tipe Kamar
        </label>

        <input
        type="text"
        name="nama_tipe"
        class="form-control"
        placeholder="Contoh : Deluxe Room"
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
        placeholder="500000"
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
        placeholder="2"
        required>

    </div>

    <div class="col-md-12 mb-3">

        <label class="form-label">
            Fasilitas
        </label>

        <textarea
        name="fasilitas"
        class="form-control"
        rows="4"
        placeholder="Contoh: AC, WiFi, TV, Water Heater"></textarea>

    </div>

</div>

<div class="d-flex gap-2">

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('tipe.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</div>

</form>

</div>

@endsection
