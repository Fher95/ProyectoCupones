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
    
    <div class="card-columns">
        @foreach($compras as $compra)
            
            <div class="card">
                <img src="{{ $compra->urlimagencupon }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $compra->nombreCupon }}</h5>
                    <div class="card-text">
                        <p>cantidad: {{ $compra->cantidad }}</p>
                        <p>Precio: {{ $compra->preciocupon }}</p>
                        <p>Descuento: {{ $compra->descuentocupon }}</p>
                        <p>Id usuario: {{ $compra->idUsuario }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="">
                        <button class="btn btn-danger">Redimir</button>
                    </form>
                </div>
            </div>
            
        @endforeach
    </div>


</body>
</html>