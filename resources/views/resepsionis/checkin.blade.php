<h2>Check In Tamu</h2>


<form method="POST" action="{{ route('resepsionis.checkin.store') }}">

@csrf


<label>Reservasi</label>

<select name="booking_id" class="form-control">

@foreach($bookings as $b)

<option value="{{ $b->id }}">

{{ $b->nama_depan }}
{{ $b->nama_belakang }}
-
{{ $b->nama_kamar }}

</option>

@endforeach

</select>


<br>


<label>Pilih Kamar</label>

<select class="form-control">

@foreach($kamar as $k)

<option>

{{ $k->nomor_kamar }}

</option>

@endforeach

</select>


<br>


<button class="btn btn-success">
Selesaikan Check In
</button>


</form>