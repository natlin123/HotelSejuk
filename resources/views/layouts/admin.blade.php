<div>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->
</div>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejuk Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background-color: #f5f7fa;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #1f4d3a;
            position: fixed;
            left: 0;
            top: 0;
            color: white;
        }

        .logo {
            padding: 25px;
            font-size: 22px;
            font-weight: bold;
            border-bottom: 1px solid rgba(255,255,255,.2);
        }

        .sidebar-menu {
            margin-top: 15px;
        }

        .sidebar-menu a {
            display: block;
            padding: 14px 25px;
            color: white;
            text-decoration: none;
            transition: .3s;
        }

        .sidebar-menu a:hover {
            background: rgba(255,255,255,.15);
        }

        .sidebar-menu i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
        }

        .navbar-custom {
            background: white;
            padding: 15px 30px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dashboard-content {
            padding: 30px;
        }

        .card-dashboard {
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,.08);
        }

        .stat-icon {
            font-size: 40px;
            opacity: .8;
        }

        .activity-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,.08);
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="logo">
            <i class="bi bi-building"></i>
            Sejuk Hotel
        </div>

        <div class="sidebar-menu">

            <a href="#">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>

          <a href="{{ route('kamar.index') }}">
          <i class="bi bi-door-open"></i>
             Kamar
            </a>

          <a href="#">
    <i class="bi bi-calendar-check"></i>
    Booking
</a>
            <a href="#">
                <i class="bi bi-people"></i>
                Tamu
            </a>

            <a href="#">
                <i class="bi bi-credit-card"></i>
                Pembayaran
            </a>

            <a href="#">
                <i class="bi bi-file-earmark-bar-graph"></i>
                Laporan
            </a>

            <a href="#">
                <i class="bi bi-gear"></i>
                Pengaturan
            </a>

        </div>

    </div>

    <!-- Content -->
    <div class="main-content">

        <!-- Navbar -->
        <div class="navbar-custom">

            <div>
                <h4 class="mb-0">Dashboard</h4>
            </div>

            <div class="d-flex align-items-center gap-3">

                <button class="btn btn-outline-success">
                    <i class="bi bi-gear"></i>
                    Pengaturan
                </button>

                <div class="dropdown">

                    <button class="btn btn-success dropdown-toggle"
                        data-bs-toggle="dropdown">

                        <i class="bi bi-person-circle"></i>
                        {{ Auth::user()->nama }}

                    </button>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item" href="#">
                                Profil
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item">
                                    Logout
                                </button>
                            </form>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <!-- Isi Halaman -->
        <div class="dashboard-content">

            @yield('content')

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
