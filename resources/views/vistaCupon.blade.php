<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('navbar')
    <p>.</p>
    <p>.</p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>COMPRA DE CUPON</strong></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h2 class="card-text">{{$cupon->nombreCupon}}</h2>
                       
                    <div class="col-sm-6 col-md-4 col-lg-3">
    
                                                    
                        <img class="imgCard" src="../{{$cupon->URLImagenCupon}}" alt="Card image cap">
                        
                    <ul class="list-group   list-group-flush">
                        <!--<li class="list-group-item">{{$cupon->nombreCupon}}</li>-->
                    
                    <div class="card-body">
                        <p class="card-text">Precio: ${{$cupon->precioCupon}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescuento: {{$cupon->descuentoCupon}}%</p>
                        <h4 class="card-text">Precio Final: ${{($cupon->precioCupon) * (1 - (($cupon->descuentoCupon)/100))}}</h4>
                        <h4 class="card-text">Disponibles: {{($cupon->totalAutorizados)}}</h4>
                        <select class="form-control" id="cantidadCompra" name="cantidadCompra">                        
                        @for($i=1 ; $i<=$cupon->totalAutorizados; $i++)
                            <option value='{{ $i }}'>{{ $i }}</option>
                        @endfor;                        
                        
                        </select>
                        <a href="{{ route('comprarCupones', ['idCupon' => $cupon->idCupon, 'cantidadCompra' => 1 ] )}}"  class = "btn btn-danger btn-xs btn-block">Comprar</a>
                        
                    </div>
                    
                   
                    </div>
                        
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>