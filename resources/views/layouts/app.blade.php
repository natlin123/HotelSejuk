<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sejuk Hotel</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">



<style>


body{

    margin:0;
    background:#f5f7f5;
    font-family:'Segoe UI',sans-serif;

}



/* SIDEBAR */

.sidebar{

    width:250px;
    height:100vh;

    position:fixed;

    left:0;
    top:0;

    background:#1f4d3a;

    color:white;

}



.logo{

    padding:25px;

    font-size:22px;

    font-weight:bold;

    border-bottom:1px solid rgba(255,255,255,.2);

}



.sidebar-menu{

    margin-top:15px;

}



.sidebar-menu a{

    display:block;

    padding:14px 25px;

    color:white;

    text-decoration:none;

}



.sidebar-menu a:hover,
.sidebar-menu a.active{

    background:rgba(255,255,255,.15);

}



.sidebar-menu i{

    margin-right:10px;

}




/* MAIN */


.main-content{

    margin-left:250px;

}



.navbar-custom{

    background:white;

    padding:15px 30px;

    border-bottom:1px solid #ddd;

    display:flex;

    justify-content:space-between;

    align-items:center;

}



.dashboard-content{

    padding:30px;

}





/* DASHBOARD CARD */


.card{

    border:none;

    border-radius:15px;

}





/* LAPORAN */


.stat-card{

    background:white;

    border-radius:15px;

    padding:25px;

    box-shadow:0 5px 20px rgba(0,0,0,.08);

    height:100%;

}



.stat-label{

    font-size:13px;

    color:#777;

    font-weight:600;

}



.stat-card h3{

    color:#1f4d3a;

    font-weight:700;

}



.stat-info{

    color:#198754;

    font-size:14px;

}




.report-card{

    background:white;

    border-radius:15px;

    box-shadow:0 5px 20px rgba(0,0,0,.08);

}





.progress{

    height:8px;

}



.progress-bar{

    background:#1f4d3a;

}



.badge-hunian{

    background:#1f4d3a;

    color:white;

    padding:5px 12px;

    border-radius:20px;

}



table{

    background:white;

}




</style>


</head>


<body>




<div class="sidebar">


<div class="logo">

<i class="bi bi-building"></i>

Sejuk Hotel


</div>




<div class="sidebar-menu">


<a href="{{ route('dashboard') }}"
class="{{ request()->routeIs('dashboard')?'active':'' }}">

<i class="bi bi-speedometer2"></i>

Dashboard

</a>



<a href="{{ route('kamar.index') }}"
class="{{ request()->routeIs('kamar.*')?'active':'' }}">

<i class="bi bi-door-open"></i>

Kamar

</a>




<a href="{{ route('user.index') }}"
class="{{ request()->routeIs('user.*')?'active':'' }}">

<i class="bi bi-people"></i>

User

</a>





<a href="{{ route('tipe.index') }}"
class="{{ request()->routeIs('tipe.*')?'active':'' }}">

<i class="bi bi-tags"></i>

Tipe & Tarif Kamar

</a>





<a href="{{ route('laporan.index') }}"
class="{{ request()->routeIs('laporan.*')?'active':'' }}">

<i class="bi bi-file-earmark-bar-graph"></i>

Laporan

</a>





<a href="{{ route('setting.index') }}"
class="{{ request()->routeIs('setting.*')?'active':'' }}">

<i class="bi bi-gear"></i>

Pengaturan

</a>



</div>


</div>






<div class="main-content">





<div class="navbar-custom">


<h5 class="mb-0 fw-bold">

Administrator

</h5>




<div class="d-flex align-items-center gap-3">


<i class="bi bi-bell fs-5"></i>




<div class="dropdown">


<button class="btn btn-success dropdown-toggle"
data-bs-toggle="dropdown">


<i class="bi bi-person-circle"></i>


{{ Auth::user()->nama ?? 'Administrator' }}


</button>





<ul class="dropdown-menu">


<li>

<a class="dropdown-item">

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








<div class="dashboard-content">


@yield('content')


</div>





</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>


</html>
