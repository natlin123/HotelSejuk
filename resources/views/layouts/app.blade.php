<!DOCTYPE html>
<html>
<head>
    <title>Sejuk Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f3f6f1;
        }

        .sidebar{
            width:250px;
            min-height:100vh;
            background:#eef5ee;
        }

        .sidebar a{
            display:block;
            padding:12px;
            color:#333;
            text-decoration:none;
        }

        .sidebar a:hover{
            background:#dff0df;
        }

        .content{
            flex:1;
            padding:30px;
        }

        .card-custom{
            border:none;
            border-radius:15px;
            box-shadow:0 3px 10px rgba(0,0,0,.05);
        }

    </style>
</head>
<body>

<div class="d-flex">

    <div class="sidebar p-3">

        <h3 class="mb-4">
            Menu Utama
        </h3>

        <a href="#">Dashboard</a>
        <a href="#">Kamar</a>
        <a href="#">Booking</a>
        <a href="#">Tamu</a>
        <a href="#">Pembayaran</a>
        <a href="#">Laporan</a>

    </div>

    <div class="content">

        @yield('content')

    </div>

</div>

</body>
</html>
