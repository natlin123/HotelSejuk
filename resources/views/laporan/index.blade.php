@extends('layouts.app')


@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">


    <div>

        <h2 class="page-title mb-1">
            Laporan Analisis & Statistik
        </h2>

        <small class="text-muted">
            Tinjauan performa hotel dan pendapatan
        </small>

    </div>



    <div class="d-flex gap-2">


        <a href="{{ route('setting.index') }}"
        class="btn btn-outline-success">

            <i class="bi bi-gear"></i>
            Pengaturan

        </a>



        <a href="{{ route('laporan.export') }}"
        class="btn btn-success">

            <i class="bi bi-download"></i>
            Export

        </a>


    </div>


</div>





<!-- CARD -->


<div class="row g-3 mb-4 mt-3">



<div class="col-md-4">

<div class="stat-card">


<div>

<div class="stat-label">
TOTAL PENDAPATAN
</div>


<h3>
Rp {{ number_format($totalPendapatan,0,',','.') }}
</h3>


<div class="stat-info">
Pendapatan berhasil
</div>


</div>


<i class="bi bi-graph-up-arrow text-success fs-2"></i>


</div>

</div>





<div class="col-md-4">

<div class="stat-card">


<div>


<div class="stat-label">
RATA-RATA HUNIAN
</div>


<h3>
{{ $hunian }}%
</h3>


<div class="stat-info">
Dari booking selesai
</div>


</div>


<i class="bi bi-bar-chart-line text-success fs-2"></i>


</div>

</div>






<div class="col-md-4">


<div class="stat-card">


<div>


<div class="stat-label">
BOOKING SELESAI
</div>


<h3>
{{ $bookingSelesai }}
</h3>


<div class="text-muted small">
Total booking berhasil
</div>


</div>



<i class="bi bi-check-circle text-success fs-2"></i>



</div>


</div>



</div>







<!-- GRAFIK -->


<div class="row g-3">


<div class="col-lg-8">


<div class="report-card p-4">


<h5>
Tren Pendapatan Bulanan
</h5>


<canvas id="chartPendapatan"></canvas>


</div>


</div>






<div class="col-lg-4">


<div class="report-card p-4">


<h5>
Tipe Kamar Terpopuler
</h5>



@foreach($tipePopuler as $kamar)


<div class="mb-4">


<div class="d-flex justify-content-between">


<span>
{{ $kamar->nama_kamar }}
</span>


<strong>
{{ $kamar->jumlah }} Booking
</strong>


</div>



<div class="progress">


<div class="progress-bar"

style="
width: {{ $kamar->jumlah * 20 }}%
">

</div>


</div>



</div>


@endforeach



</div>


</div>



</div>









<!-- TABLE -->


<div class="report-card p-4 mt-4">


<h5>
Ringkasan Laporan Bulanan
</h5>



<table class="table">


<thead>

<tr>

<th>Bulan</th>
<th>Booking</th>
<th>Kamar Terisi</th>
<th>Hunian</th>
<th>Pendapatan</th>

</tr>

</thead>




<tbody>



@foreach($laporan as $data)



<tr>


<td>

{{ date('F', mktime(0,0,0,$data->bulan,1)) }}

</td>



<td>
{{ $data->total_booking }}
</td>



<td>
{{ $data->kamar_terisi }}
</td>



<td>

<span class="badge bg-success">

{{ $hunian }}%

</span>


</td>



<td>


Rp {{ number_format($data->pendapatan,0,',','.') }}


</td>



</tr>



@endforeach




</tbody>


</table>



</div>








<!-- CHART SCRIPT -->


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>


const ctx =
document.getElementById('chartPendapatan');



new Chart(ctx, {


type:'bar',



data:{


labels:[

@foreach($laporan as $data)

"{{ date('F', mktime(0,0,0,$data->bulan,1)) }}",

@endforeach

],




datasets:[{

label:'Pendapatan',


data:[


@foreach($laporan as $data)

{{ $data->pendapatan }},

@endforeach


],


borderWidth:1


}]


},




options:{


responsive:true,


scales:{


y:{


beginAtZero:true,


ticks:{


callback:function(value){

return 'Rp '+
value.toLocaleString('id-ID');

}


}


}


}


}



});



</script>





@endsection
