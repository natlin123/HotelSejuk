@extends('layouts.app')

@section('content')

<h3 class="mb-4">
Reception Reports
</h3>

<div class="row g-4">

<div class="col-md-3">
<div class="stat-card">

<div class="stat-label">
DAILY REVENUE
</div>

<h3>
Rp {{ number_format($dailyRevenue) }}
</h3>

</div>
</div>

<div class="col-md-3">
<div class="stat-card">

<div class="stat-label">
OCCUPANCY RATE
</div>

<h3>
{{ $occupancy }}%
</h3>

</div>
</div>

<div class="col-md-3">
<div class="stat-card">

<div class="stat-label">
AVG NIGHT RATE
</div>

<h3>
Rp {{ number_format($avgNightRate) }}
</h3>

</div>
</div>

<div class="col-md-3">
<div class="stat-card">

<div class="stat-label">
PENDING TASK
</div>

<h3>
{{ $pending }}
</h3>

</div>
</div>

</div>


<div class="card mt-4">

<div class="card-body">

<h5>
Recent Transactions
</h5>

<table class="table">

<thead>

<tr>

<th>Kode</th>

<th>Tamu</th>

<th>Kamar</th>

<th>Total</th>

<th>Status</th>

</tr>

</thead>

<tbody>

@foreach($transactions as $trx)

<tr>

<td>
{{ $trx->kode_transaksi }}
</td>

<td>
{{ $trx->nama_depan }}
{{ $trx->nama_belakang }}
</td>

<td>
{{ $trx->nama_kamar }}
</td>

<td>
Rp {{ number_format($trx->total) }}
</td>

<td>

@if($trx->status_pembayaran=='Success')

<span class="badge bg-success">

Paid

</span>

@else

<span class="badge bg-warning">

Pending

</span>

@endif

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection
