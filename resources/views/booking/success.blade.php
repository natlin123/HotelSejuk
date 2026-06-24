<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Pembayaran Berhasil</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f0;
}

.success-container{
    max-width:700px;
    margin:40px auto;
}

.card-success{
    background:white;
    border-radius:25px;
    padding:40px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

.icon-success{
    width:90px;
    height:90px;
    background:#bde5c0;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:40px;
    margin:auto;
}

.total{
    color:#5f8d63;
    font-size:32px;
    font-weight:bold;
}

.btn-green{
    background:#5f8d63;
    color:white;
    border:none;
    border-radius:10px;
    padding:12px 25px;
    text-decoration:none;
}

.btn-outline{
    border:1px solid #5f8d63;
    color:#5f8d63;
    border-radius:10px;
    padding:12px 25px;
    text-decoration:none;
}

</style>

</head>
<body>

<div class="success-container">

<div class="card-success">

<div class="text-center mb-4">

<div class="icon-success">
✓
</div>

<h2 class="mt-3 text-success">
Pembayaran Berhasil
</h2>

<p>
Transaksi telah berhasil diproses.
</p>

</div>

<div class="card p-4">

<small class="text-muted">
DETAIL TRANSAKSI
</small>

<hr>

<div class="d-flex justify-content-between mb-3">
<span>Kode Transaksi</span>
<strong>{{ $booking->kode_transaksi }}</strong>
</div>

<div class="d-flex justify-content-between mb-3">
<span>Tanggal</span>
<strong>{{ now()->format('d M Y H:i') }} WIB</strong>
</div>

<div class="d-flex justify-content-between mb-3">
<span>Metode</span>
<strong>{{ $booking->metode_pembayaran }}</strong>
</div>

<hr>

<div class="d-flex justify-content-between">

<span class="fw-bold">
Total
</span>

<span class="total">
Rp {{ number_format($booking->total,0,',','.') }}
</span>

</div>

</div>

<div class="text-center mt-4">

<a href="{{ route('payment.pdf',$booking->id) }}"
   class="btn-outline me-2">

    Unduh Resi PDF

</a>

<a href="/" class="btn-green">
Selesai
</a>

</div>

</div>

</div>

</body>
</html>
