@extends('layouts.admin')

@section('content')

<div class="mb-4">
    <h2 class="fw-bold">Tambah Kamar</h2>
    <p class="text-muted">Tambahkan data kamar hotel baru.</p>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('kamar.store') }}" method="POST">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Nomor Kamar</label>
                    <input type="text" name="nomor_kamar" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tipe Kamar</label>
                    <select name="tipe_kamar_id" class="form-control" id="tipeSelect" required>
                        <option value="">-- Pilih Tipe --</option>
                        @foreach($tipeKamars as $tipe)
                            <option value="{{ $tipe->id }}"
                                data-harga="{{ $tipe->harga }}"
                                data-kapasitas="{{ $tipe->kapasitas }}">
                                {{ $tipe->nama_tipe }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option>Tersedia</option>
                        <option>Terisi</option>
                        <option>Maintenance</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Kapasitas</label>
                    <input type="number" name="kapasitas" class="form-control" id="kapasitas" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control"></textarea>
                </div>

            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-success">Simpan</button>
            </div>

        </form>

    </div>
</div>

<script>
document.getElementById('tipeSelect').addEventListener('change', function () {
    let selected = this.options[this.selectedIndex];

    document.getElementById('harga').value = selected.dataset.harga ?? 0;
    document.getElementById('kapasitas').value = selected.dataset.kapasitas ?? 1;
});
</script>

@endsection
