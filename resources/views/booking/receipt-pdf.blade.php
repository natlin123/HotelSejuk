<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Resi Pembayaran</title>

<style>

body{
    font-family: DejaVu Sans;
    padding:20px;
}

h1{
    text-align:center;
    color:#5f8d63;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

td{
    border:1px solid #ddd;
    padding:10px;
}

.label{
    width:35%;
    font-weight:bold;
}

.total{
    font-size:18px;
    font-weight:bold;
    color:#5f8d63;
}

</style>

</head>
<body>

<h1>RESI PEMBAYARAN HOTEL</h1>

<hr>

<table>

<tr>
    <td class="label">Kode Transaksi</td>
    <td>{{ $booking->kode_transaksi }}</td>
</tr>

<tr>
    <td class="label">Nama Tamu</td>
    <td>
        {{ $booking->nama_depan }}
        {{ $booking->nama_belakang }}
    </td>
</tr>

<tr>
    <td class="label">Email</td>
    <td>{{ $booking->email }}</td>
</tr>

<tr>
    <td class="label">Nomor Telepon</td>
    <td>{{ $booking->telepon }}</td>
</tr>

<tr>
    <td class="label">Kamar</td>
    <td>{{ $booking->nama_kamar }}</td>
</tr>

<tr>
    <td class="label">Check In</td>
    <td>{{ $booking->checkin }}</td>
</tr>

<tr>
    <td class="label">Check Out</td>
    <td>{{ $booking->checkout }}</td>
</tr>

<tr>
    <td class="label">Durasi</td>
    <td>{{ $booking->durasi }} malam</td>
</tr>

<tr>
    <td class="label">Metode Pembayaran</td>
    <td>{{ $booking->metode_pembayaran }}</td>
</tr>

<tr>
    <td class="label">Status</td>
    <td>{{ $booking->status_pembayaran }}</td>
</tr>

<tr>
    <td class="label">Harga Kamar</td>
    <td>
        Rp {{ number_format($booking->harga,0,',','.') }}
    </td>
</tr>

<tr>
    <td class="label">Pajak</td>
    <td>
        Rp {{ number_format($booking->pajak,0,',','.') }}
    </td>
</tr>

<tr>
    <td class="label total">Total Pembayaran</td>
    <td class="total">
        Rp {{ number_format($booking->total,0,',','.') }}
    </td>
</tr>

</table>

<br><br>

<p>
Terima kasih telah melakukan reservasi di Sejuk Hotel Bali.
</p>

</body>
</html>
