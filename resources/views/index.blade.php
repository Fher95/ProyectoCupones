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
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$item->nombreCupon}}</li>
            <div class="card-body">
              <p class="card-text">Precio: ${{$item->precioCupon}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescuento: {{$item->descuentoCupon}}%</p>
              <h4 class="card-text">Precio Final: ${{($item->precioCupon) * (1 - (($item->descuentoCupon)/100))}}</h4>
              <a href="{{ route('visCupon', ['idCupon' => $item->idCupon] )}}" class="btn btn-dark">Comprar</a>        
            </div>
          </div>

        </div>
        
        @endforeach()
      </div>
    </div>
    

         <!--   @foreach($cupones as $item)
                
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{$item->URLImagenCupon}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
               
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="{{$item->URLImagenCupon}}" alt="">
                         Hover Content 

                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Precio Original: ${{$item->precioCupon}}</p>
                            <p>Descuento: {{$item->descuentoCupon}}%</p>
                            <h3>Precio Final: ${{($item->precioCupon) * (1 - (($item->descuentoCupon)/100))}}</p>
                            <h4>{{$item->nombreCupon}}</h4>
                            <button type="button" class="btn btn-dark">Comprar</button>
                        </div>
                    </a>
                </div>
                
            @endforeach()
          -->
          




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