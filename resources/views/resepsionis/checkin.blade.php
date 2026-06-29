@extends('layouts.app')

@section('content')


<style>

.checkin-wrapper{
    max-width:900px;
    margin:auto;
}


.hero-checkin{

    background:#9af0b5;
    border-radius:0 0 20px 20px;
    padding:45px;
    margin-bottom:25px;

}


.hero-checkin h2{

    color:#176b46;
    font-weight:700;

}


.hero-checkin p{

    color:#4b8268;

}



.checkin-card{

    background:white;
    border-radius:20px;
    padding:35px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);

}



.section-title{

    font-weight:700;
    color:#183b2d;
    margin-bottom:15px;

}



.form-control{

    border-radius:12px;
    padding:13px;

}



.btn-checkin{

    width:100%;
    background:#087443;
    color:white;
    padding:15px;
    border-radius:12px;
    border:none;
    margin-top:20px;

}



.btn-checkin:hover{

    background:#065c35;

}


.divider{

    margin:25px 0;
    border-top:1px solid #eee;

}


</style>



<div class="checkin-wrapper">



<div class="hero-checkin">


<h2>

Mari Berikan Senyuman<br>
Terbaik Untuk Tamu Kita

</h2>


<p>

Pastikan proses check-in terasa hangat dan nyaman.

</p>


</div>





<div class="checkin-card">



<form method="POST"
action="{{ route('resepsionis.checkin.store') }}">


@csrf




<div class="section-title">

<i class="bi bi-ticket-perforated"></i>

Reservasi

</div>



<input 
class="form-control"
placeholder="Punya kode reservasi? Masukkan di sini..."
>



<div class="divider"></div>





<div class="section-title">

<i class="bi bi-person"></i>

Siapa Tamu Kita Hari Ini?

</div>




<div class="row g-3">


<div class="col-md-6">

<input
class="form-control"
placeholder="Nama lengkap tamu yang ramah"
>


</div>



<div class="col-md-6">

<input
class="form-control"
placeholder="Nomor telepon untuk menyapa"
>


</div>



</div>





<div class="divider"></div>






<div class="section-title">

<i class="bi bi-moon"></i>

Pilihkan Kamar Ternyaman

</div>





<div class="row g-3">



<div class="col-md-6">


<select
name="booking_id"
class="form-control">


<option>
Pilih kamar yang tersedia
</option>


@foreach($kamar as $k)

<option value="{{ $k->id }}">

Kamar {{ $k->nomor_kamar }}

</option>


@endforeach


</select>


</div>




<div class="col-md-6">


<input
type="date"
class="form-control"
>


</div>




</div>





<button class="btn-checkin">


<i class="bi bi-stars"></i>

Selesaikan Check-In


</button>




</form>



</div>


</div>



@endsection
