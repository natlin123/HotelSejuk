@extends('layouts.resepsionis')

@section('content')

<div class="container-fluid px-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">Laporan Harian</h2>
            <p class="text-muted mb-0">
                Ringkasan aktivitas hotel untuk hari ini
            </p>
        </div>

        <div>

            {{-- HAPUS PENGATURAN kalau tidak mau --}}
            <button class="btn btn-success">
                Export
            </button>

        </div>

    </div>

<div class="row g-4">

{{-- CHECKIN --}}
<div class="col-md-4">
<div class="card shadow-sm border-0 rounded-4">

<div class="card-body d-flex">

<div class="bg-success-subtle p-3 rounded-4 me-3">
<i class="fas fa-sign-in-alt fs-2 text-success"></i>
</div>

<div>
<div class="text-secondary">
CHECK-IN HARI INI
</div>

<h1 class="text-success fw-bold">
{{ $checkin ?? 0 }}
</h1>

<p class="mb-0 text-muted">
Tamu masuk hari ini
</p>

</div>

</div>

</div>
</div>


{{-- CHECKOUT --}}
<div class="col-md-4">

<div class="card shadow-sm border-0 rounded-4">

<div class="card-body d-flex">

<div class="bg-primary-subtle p-3 rounded-4 me-3">
<i class="fas fa-sign-out-alt fs-2 text-primary"></i>
</div>

<div>

<div class="text-secondary">
CHECK-OUT HARI INI
</div>

<h1 class="text-primary fw-bold">
{{ $checkout ?? 0 }}
</h1>

<p class="text-muted mb-0">
Tamu keluar hari ini
</p>

</div>

</div>

</div>

</div>


{{-- RESERVASI --}}
<div class="col-md-4">

<div class="card shadow-sm border-0 rounded-4">

<div class="card-body d-flex">

<div class="bg-warning-subtle p-3 rounded-4 me-3">

<i class="fas fa-calendar fs-2 text-warning"></i>

</div>

<div>

<div class="text-secondary">
RESERVASI HARI INI
</div>

<h1 class="text-warning fw-bold">
{{ $reservasi ?? 0 }}
</h1>

<p class="mb-0 text-muted">
Reservasi baru hari ini
</p>

</div>

</div>

</div>

</div>


{{-- PEMBAYARAN --}}
<div class="col-md-6">

<div class="card shadow-sm border-0 rounded-4">

<div class="card-body d-flex">

<div class="bg-info-subtle p-3 rounded-4 me-3">

<i class="fas fa-wallet fs-2 text-purple"></i>

</div>

<div>

<div class="text-secondary">
LAPORAN PEMBAYARAN
</div>

<h2 class="fw-bold text-purple">

Rp {{ number_format($pembayaran ?? 0,0,',','.') }}

</h2>

<p class="mb-0 text-muted">
Total pembayaran diterima
</p>

</div>

</div>

</div>

</div>


{{-- KAMAR --}}
<div class="col-md-6">

<div class="card shadow-sm border-0 rounded-4">

<div class="card-body d-flex justify-content-between">

<div class="d-flex">

<div class="bg-success-subtle p-3 rounded-4 me-3">

<i class="fas fa-bed fs-2 text-success"></i>

</div>

<div>

<div class="text-secondary">
KETERSEDIAAN KAMAR
</div>

<h2 class="fw-bold text-success">

{{ $tersedia ?? 0 }}/{{ $total ?? 0 }}

</h2>

<p class="mb-0 text-muted">

Kamar tersedia

</p>

</div>

</div>

<div>

<div class="text-muted">

Kamar Terisi

</div>

<h2 class="text-success fw-bold">

{{ $terisi ?? 0 }}

</h2>

</div>

</div>

</div>

</div>

</div>


{{-- KETERANGAN --}}
<div class="text-center mt-4 text-muted">

* Data di atas adalah ringkasan untuk hari ini
({{ date('d/m/Y') }})

</div>


{{-- TABEL --}}
<div class="card shadow-sm border-0 rounded-4 mt-4">

<div class="card-body">

<h4 class="mb-4">

Detail Aktivitas Hari Ini

</h4>

<table class="table">

<thead class="table-success">

<tr>

<th>No</th>

<th>Jenis Aktivitas</th>

<th>Jumlah</th>

<th>Keterangan</th>

</tr>

</thead>

<tbody>

<tr>
<td>1</td>
<td>Check-In</td>
<td>{{ $checkin ?? 0 }}</td>
<td>Tamu yang melakukan check-in hari ini</td>
</tr>

<tr>
<td>2</td>
<td>Check-Out</td>
<td>{{ $checkout ?? 0 }}</td>
<td>Tamu yang melakukan check-out hari ini</td>
</tr>

<tr>
<td>3</td>
<td>Reservasi</td>
<td>{{ $reservasi ?? 0 }}</td>
<td>Reservasi baru hari ini</td>
</tr>

<tr>
<td>4</td>
<td>Pembayaran</td>
<td>Rp {{ number_format($pembayaran ?? 0) }}</td>
<td>Total pembayaran diterima</td>
</tr>

<tr>
<td>5</td>
<td>Ketersediaan Kamar</td>
<td>{{ $tersedia ?? 0 }}/{{ $total ?? 0 }}</td>
<td>Kamar tersedia dibanding total</td>
</tr>

</tbody>

</table>

</div>

</div>

</div>

@endsection
