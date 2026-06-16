<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f6f7f2;
            font-family:'Segoe UI',sans-serif;
        }

        .container-payment{
            max-width:1100px;
            margin:30px auto;
        }

        .back-link{
            text-decoration:none;
            color:#4f7752;
            font-weight:600;
            font-size:18px;
        }

        .card-box{
            background:#fff;
            border-radius:20px;
            padding:25px;
            box-shadow:0 3px 12px rgba(0,0,0,0.08);
        }

        .payment-option{
            border:2px solid #d9e4d8;
            border-radius:15px;
            padding:20px;
            text-align:center;
            cursor:pointer;
            transition:.3s;
            height:160px;
        }

        .payment-option:hover{
            border-color:#5f8d63;
        }

        .payment-option input{
            margin-top:10px;
        }

        .payment-icon{
            font-size:40px;
        }

        .btn-pay{
            width:100%;
            background:#5f8d63;
            color:white;
            border:none;
            border-radius:30px;
            padding:14px;
            font-weight:bold;
        }

        .btn-pay:hover{
            background:#4f7752;
        }

        .btn-back{
            width:100%;
            border-radius:30px;
            padding:12px;
        }

        .total-price{
            color:#5f8d63;
            font-size:32px;
            font-weight:bold;
        }

        .room-banner{
            width:100%;
            border-radius:20px;
            margin-top:20px;
        }

        .status-badge{
            background:#ffc107;
            color:black;
            padding:5px 12px;
            border-radius:10px;
            font-size:12px;
        }

    </style>

</head>
<body>

<div class="container-payment">

    <!-- Tombol Kembali -->

    <a href="{{ url()->previous() }}" class="back-link">
        ← Payment Details
    </a>

    <div class="row mt-4">

        <!-- KIRI -->

        <div class="col-lg-7">

            <div class="card-box mb-4">

                <h4>Detail Transaksi</h4>

                <hr>

                <div class="row">

                    <div class="col-6">
                        <p>Kode Transaksi</p>
                    </div>

                    <div class="col-6 text-end">
                        <strong>{{ $booking->kode_transaksi }}</strong>
                    </div>

                </div>

                <div class="row">

                    <div class="col-6">
                        <p>Status</p>
                    </div>

                    <div class="col-6 text-end">

                        <span class="status-badge">
                            {{ $booking->status_pembayaran }}
                        </span>

                    </div>

                </div>

            </div>

            <div class="card-box">

                <h4 class="mb-4">
                    Metode Pembayaran
                </h4>

                <form action="{{ route('payment.confirm',$booking->id) }}"
                      method="POST">

                    @csrf

                    <div class="row">

                        <!-- Tunai -->

                        <div class="col-md-4 mb-3">

                            <label class="payment-option d-block">

                                <div class="payment-icon">
                                    💵
                                </div>

                                <h6 class="mt-3">
                                    Tunai
                                </h6>

                                <input type="radio"
                                       name="metode_pembayaran"
                                       value="Tunai"
                                       checked>

                            </label>

                        </div>

                        <!-- Digital -->

                        <div class="col-md-4 mb-3">

                            <label class="payment-option d-block">

                                <div class="payment-icon">
                                    📱
                                </div>

                                <h6 class="mt-3">
                                    Digital
                                </h6>

                                <input type="radio"
                                       name="metode_pembayaran"
                                       value="Digital">

                            </label>

                        </div>

                        <!-- Debit -->

                        <div class="col-md-4 mb-3">

                            <label class="payment-option d-block">

                                <div class="payment-icon">
                                    💳
                                </div>

                                <h6 class="mt-3">
                                    Debit
                                </h6>

                                <input type="radio"
                                       name="metode_pembayaran"
                                       value="Debit">

                            </label>

                        </div>

                    </div>

                    <!-- Banner Kamar -->

                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
                         class="room-banner">

            </div>

        </div>

        <!-- KANAN -->

        <div class="col-lg-5">

            <div class="card-box">

                <h4>
                    Ringkasan Pembayaran
                </h4>

                <hr>

                <div class="d-flex justify-content-between mb-3">

                    <span>Harga Kamar</span>

                    <span>
                        Rp {{ number_format($booking->harga,0,',','.') }}
                    </span>

                </div>

                <div class="d-flex justify-content-between mb-3">

                    <span>Pajak (11%)</span>

                    <span>
                        Rp {{ number_format($booking->pajak,0,',','.') }}
                    </span>

                </div>

                <hr>

                <small class="text-muted">
                    TOTAL PEMBAYARAN
                </small>

                <div class="total-price">

                    Rp {{ number_format($booking->total,0,',','.') }}

                </div>

                <button type="submit"
                        class="btn-pay mt-4">

                    Bayar Sekarang

                </button>

                <a href="{{ url()->previous() }}"
                   class="btn btn-outline-secondary btn-back mt-3">

                    Kembali

                </a>

                <div class="text-center mt-4">

                    <small class="text-muted">
                        Butuh bantuan?
                        Hubungi Support Team
                    </small>

                </div>

            </div>

        </div>

    </div>

    </form>

</div>

</body>
</html>
