<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sejuk Hotel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    min-height:100vh;
    background: linear-gradient(
        135deg,
        #eef8ef,
        #f8f4e8
    );
}

.logo{
    position:absolute;
    top:30px;
    left:50px;
    font-size:28px;
    font-weight:bold;
    color:#356b4f;
}

.login-card{
    width:430px;
    border:none;
    border-radius:15px;
}

.btn-login{
    background:#356b4f;
    color:white;
}

.btn-login:hover{
    background:#2c5a42;
    color:white;
}

footer{
    position:absolute;
    bottom:20px;
    width:100%;
    text-align:center;
    color:#888;
}

</style>

</head>
<body>

@yield('content')

<footer>
    © 2024 Sejuk Hotel Management
</footer>

</body>
</html>
