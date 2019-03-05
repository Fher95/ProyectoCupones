<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
</head>
<nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-md bg-faded justify-content-center">
    
   
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
        <ul class="navbar-nav w-100 ">
            <li class="nav-item active">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Tienda</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Pago</a>
            </li>
        </ul>
        <a href="/" class="navbar-brand d-flex  justify-content-center">PRODUCTOS</a>
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            @include('auth.menuUsuario')
        </ul>
    </div>
</nav>