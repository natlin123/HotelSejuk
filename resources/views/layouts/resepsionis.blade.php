<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sejuk Hotel - Resepsionis</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<style>

body{
background:#f5f7f5;
margin:0;
}

.sidebar{
width:250px;
height:100vh;
background:#1f4d3a;
position:fixed;
color:white;
}

.logo{
padding:25px;
font-size:22px;
font-weight:bold;
}

.sidebar a{
display:block;
padding:15px 25px;
color:white;
text-decoration:none;
}

.sidebar a:hover,
.active{
background:rgba(255,255,255,.15);
}

.main{
margin-left:250px;
}

.navbar{
background:white;
padding:20px;
}

.content{
padding:30px;
}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">

<i class="bi bi-building"></i>
Sejuk Hotel

</div>

<a href="{{ route('resepsionis.dashboard') }}">
<i class="bi bi-speedometer2"></i>
Dashboard
</a>

<a href="{{ route('resepsionis.checkin') }}">
<i class="bi bi-box-arrow-in-right"></i>
Check In
</a>

<a href="#">
<i class="bi bi-box-arrow-right"></i>
Check Out
</a>

<a href="{{ route('laporan.index') }}">
<i class="bi bi-clipboard-data-fill"></i>
Reports
</a>

</div>


<div class="main">

<div class="navbar">

<h4>Resepsionis</h4>

</div>

<div class="content">

@yield('content')

</div>

</div>

</body>

</html>
