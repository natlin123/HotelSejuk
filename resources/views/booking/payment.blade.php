<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .payment-box{
            max-width:1000px;
            margin:40px auto;
            background:white;
            border-radius:20px;
            padding:40px;
            box-shadow:0 0 15px rgba(0,0,0,0.08);
        }

        .btn-green{
            background:#5f8d63;
            color:white;
            border:none;
            border-radius:30px;
            padding:12px 30px;
            text-decoration:none;
        }

        .btn-green:hover{
            background:#4f7752;
            color:white;
        }

        .price{
            font-size:28px;
            font-weight:bold;
            color:#5f8d63;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="payment-box">

        <h1 class="mb-4">
            Pembayaran Hotel
        </h1>

        <!-- Kamar -->

        <div class="alert alert-success">

            <strong>Kamar Dipilih :</strong>

            {{ str_replace('-', ' ', $booking->nama_kamar) }}

        </div>

        <!-- Detail Menginap -->

        <div class="card mb-4">

            <div class="card-body">

                <h5>Detail Menginap</h5>

                <hr>

                <p>
                    <strong>Check In :</strong>
                    {{ $booking->checkin }}
                </p>

                <p>
                    <strong>Check Out :</strong>
                    {{ $booking->checkout }}
                </p>

                <p>
                    <strong>Durasi :</strong>
                    {{ $booking->durasi }} malam
                </p>

                <p>
                    <strong>Jumlah Tamu :</strong>
                    {{ $booking->jumlah_tamu }}
                </p>

            </div>

        </div>

        <!-- Data Tamu -->

        <div class="card mb-4">

            <div class="card-body">

                <h5>Informasi Tamu</h5>

                <hr>

                <p>
                    <strong>Nama :</strong>
                    {{ $booking->nama_depan }}
                    {{ $booking->nama_belakang }}
                </p>

                <p>
                    <strong>Email :</strong>
                    {{ $booking->email }}
                </p>

                <p>
                    <strong>Telepon :</strong>
                    {{ $booking->telepon }}
                </p>

                <p>
                    <strong>Permintaan :</strong>
                    {{ $booking->permintaan ?? '-' }}
                </p>

            </div>

        </div>

        <!-- Metode Pembayaran -->

        <div class="card mb-4">

            <div class="card-body">

                <h5>Metode Pembayaran</h5>

                <select class="form-select">

                    <option>Transfer Bank</option>

                    <option>E-Wallet</option>

                    <option>Kartu Kredit</option>

                </select>

            </div>

        </div>

        <!-- Ringkasan Pembayaran -->

        <div class="card">

            <div class="card-body">

                <h4>Ringkasan Pembayaran</h4>

                <hr>

                <div class="d-flex justify-content-between mb-2">

                    <span>Harga Kamar</span>

                    <span>
                        Rp {{ number_format($booking->harga,0,',','.') }}
                    </span>

                </div>

                <div class="d-flex justify-content-between mb-2">

                    <span>Pajak (11%)</span>

                    <span>
                        Rp {{ number_format($booking->pajak,0,',','.') }}
                    </span>

                </div>

                <hr>

                <div class="d-flex justify-content-between">

                    <strong>Total Pembayaran</strong>

                    <span class="price">
                        Rp {{ number_format($booking->total,0,',','.') }}
                    </span>

                </div>

            </div>

        </div>

        <!-- Detail Transaksi -->

        <div class="card mt-4">

            <div class="card-body">

                <h5>Detail Transaksi</h5>

                <hr>

                <p>
                    <strong>Kode Transaksi :</strong>
                    {{ $booking->kode_transaksi }}
                </p>

                <p>
                    <strong>Status :</strong>

                    <span class="badge bg-warning">
                        {{ $booking->status_pembayaran }}
                    </span>

                </p>

            </div>

        </div>

        <!-- Tombol -->

        <div class="text-end mt-4">

            <a href="/" class="btn btn-secondary">
                Kembali
            </a>

            <a href="{{ route('payment.show', $booking->id) }}"
               class="btn btn-green">

                Bayar Sekarang

            </a>

        </div>

    </div>

</div>

</body>
</html>
