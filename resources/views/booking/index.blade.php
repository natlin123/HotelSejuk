<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .booking-box{
            max-width:1000px;
            margin:40px auto;
            background:white;
            border-radius:20px;
            padding:40px;
            box-shadow:0 0 15px rgba(0,0,0,.08);
        }

        .btn-green{
            background:#5f8d63;
            color:white;
            border:none;
            border-radius:30px;
            padding:12px 30px;
        }

        .btn-green:hover{
            background:#4f7752;
            color:white;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="booking-box">

        <h1 class="mb-4">
            Booking Hotel
        </h1>

        <div class="alert alert-success">

            <strong>Kamar Dipilih :</strong>

            {{ str_replace('-', ' ', $nama_kamar) }}

        </div>

        <form action="{{ route('booking.store') }}" method="POST">

            @csrf

            <input
                type="hidden"
                name="room_id"
                value="{{ $room_id }}">

            <input
                type="hidden"
                name="nama_kamar"
                value="{{ $nama_kamar }}">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Nama Depan
                    </label>

                    <input
                        type="text"
                        name="nama_depan"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Nama Belakang
                    </label>

                    <input
                        type="text"
                        name="nama_belakang"
                        class="form-control"
                        required>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Nomor Telepon
                    </label>

                    <input
                        type="text"
                        name="telepon"
                        class="form-control"
                        required>

                </div>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Check In
                </label>

                <input
                    type="date"
                    name="checkin"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Check Out
                </label>

                <input
                    type="date"
                    name="checkout"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Jumlah Tamu
                </label>

                <input
                    type="number"
                    name="jumlah_tamu"
                    class="form-control"
                    min="1"
                    value="1"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Permintaan Khusus
                </label>

                <textarea
                    name="permintaan"
                    rows="4"
                    class="form-control"></textarea>

            </div>

            <div class="text-end">

                <button
                    type="submit"
                    class="btn btn-green">

                    Lanjut ke Pembayaran

                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>
