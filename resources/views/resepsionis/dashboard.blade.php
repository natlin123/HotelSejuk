@extends('layouts.app')


@section('content')


<h2 class="fw-bold">
Dashboard Resepsionis
</h2>



<div class="row mt-4">


<div class="col-md-3">
<div class="stat-card">

<div class="stat-label">
Total Kamar
</div>

<h3>
{{ $totalKamar }}
</h3>

</div>
</div>



<div class="col-md-3">
<div class="stat-card">

<div class="stat-label">
Kamar Tersedia
</div>

<h3>
{{ $kamarTersedia }}
</h3>

</div>
</div>




<div class="col-md-3">
<div class="stat-card">

<div class="stat-label">
Kamar Terisi
</div>

<h3>
{{ $kamarTerisi }}
</h3>

</div>
</div>




<div class="col-md-3">
<div class="stat-card">

<div class="stat-label">
Check Out Hari Ini
</div>

<h3>
{{ $checkOutHariIni }}
</h3>

</div>
</div>


</div>



<br>


<h4>
Aktivitas Terbaru
</h4>



@foreach($bookingTerbaru as $booking)


<div class="card p-3 mb-3 shadow-sm">


Booking :
<b>
{{ $booking->nama_tamu ?? 'Tamu' }}
</b>


<br>


Status :

@if($booking->status_pembayaran == 'Lunas')


<span class="badge bg-success">
Lunas
</span>


@else


<span class="badge bg-warning">
Belum Lunas
</span>


@endif



</div>


@endforeach



@endsection
