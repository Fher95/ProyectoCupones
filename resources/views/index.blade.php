
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

    <!-- Search Wrapper Area Start -->
 
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
    </div>
     
    <p>.</p>
       
        
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