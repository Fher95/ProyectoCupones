
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

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
    @endif


       
        
        <!-- Product Catagories Area Start -->
        <div class="container-fluid">
           <div class="row">
            <div class="col col-xl-12">
        
            <div class="amado-pro-catagory clearfix">

            @foreach($cupones as $item)
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="{{$item->URLImagenCupon}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Precio: {{$item->precioCupon}}</p>
                            <p>Descuento: {{$item->descuentoCupon}}</p>
                            <h4>{{$item->nombreCupon}}</h4>
                            <button type="button" class="btn btn-dark">Comprar</button>
                        </div>
                    </a>
                </div>
            @endforeach();

            </div>
       
        <!-- Product Catagories Area End -->
          </div>
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