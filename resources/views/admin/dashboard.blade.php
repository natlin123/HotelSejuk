@extends('layouts.admin')

@section('content')


<div class="row g-4">


    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h6>Total Kamar</h6>

            <h2>
                {{ $totalKamar }}
            </h2>

        </div>
    </div>



    <div class="col-md-4">
        <div class="card shadow-sm p-3">

            <h6>Kamar Terisi</h6>

            <h2>
                {{ $kamarTerisi }}
            </h2>

        </div>
    </div>




    <div class="col-md-4">
        <div class="card shadow-sm p-3">

            <h6>Pendapatan Hari Ini</h6>

            <h2>
                Rp {{ number_format($pendapatanHariIni,0,',','.') }}
            </h2>


        </div>
    </div>


</div>




<hr class="mt-4">


<h4>
    Aktivitas Terbaru
</h4>



@foreach($bookingTerbaru as $booking)


<div class="card shadow-sm p-3 mb-3">


    <div>

        Booking :

        <b>
            {{ $booking->nama_depan }}
            {{ $booking->nama_belakang }}
        </b>


        -

        <b>
            {{ $booking->nama_kamar }}
        </b>



    </div>




    <div class="mt-2">


        @if($booking->status_pembayaran == "Success")


            <span class="badge bg-success">
                Lunas
            </span>


        @elseif($booking->status_pembayaran == "Pending")


            <span class="badge bg-warning">
                Pending
            </span>


        @else


            <span class="badge bg-secondary">
                {{ $booking->status_pembayaran }}
            </span>


        @endif



    </div>


</div>


@endforeach



@endsection
