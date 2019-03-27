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

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  
 <a class="navbar-brand" href="{{ url('/') }}">
  <img src="img/core-img/logo.png" width="50" height="50" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
   
    <li class="nav-item active">
      <a class="nav-link" href="{{ url('/') }}">Inicio</a>
    </li>
    
  </ul>

  <ul class="navbar-nav justify-content-end">
    @include('auth.menuUsuario')
  </ul>
  
</div>
</nav>
<br><br><br>