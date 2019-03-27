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
<body>
      @include('navbar')
      <h3 align="center">Spartan Cupón</h3>
      <br>
      <div class="container-fluid">
        <div class="row">
          @foreach($cupones as $item)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card  border-dark mb-12" >
                <img class="imgCard" src="{{$item->URLImagenCupon}}" alt="Card image cap">        
                <ul class="list-group   list-group-flush">
                  <li class="list-group-item">{{$item->nombreCupon}}</li>      
                <div class="card-body">
                  <p class="card-text">Precio: ${{$item->precioCupon}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescuento: {{$item->descuentoCupon}}%</p>
                  <h4 class="card-text">Precio Final: ${{($item->precioCupon) * (1 - (($item->descuentoCupon)/100))}}</h4>
                  <a href="{{ route('visCupon', ['idCupon' => $item->idCupon] )}}" class="btn btn-danger">Comprar</a>
                </div>
              </div>
            </div>
        @endforeach()
        </div>
      </div>

          <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
          <script src="js/jquery/jquery-2.2.4.min.js"></script>
          <!-- Popper js -->
          <script src="js/popper.min.js"></script>
          <!-- Bootstrap js -->
          <script src="js/bootstrap.min.js"></script>
          <!-- Plugins js -->
          <script src="js/plugins.js"></script>
          <!-- Active js -->
          <script src="js/active.js"></script>

        </body>

        </html>