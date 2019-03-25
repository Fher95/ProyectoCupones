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
                    <div class="card-header"><strong>¡ CUPON ADQUIRIDO !</strong></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class = "panel-heading">
                            <h1>¡{{ auth()->user()->nombreUsuario }} has adquirido un nuevo cupon!</h1>
                        </div>
                        <div class = "panel-body">
                            <p>Dirigete a la seccion Mis Cupones para redimirlo.</strong></p>                            
                        </div>
                        <div class = "panel-footer">
                        
                            <form action="{{route('showMisCupones')}}">
                                <button class = "btn btn-danger btn-xs btn-block">Ir a Mis Cupones</button>
                            </form>
                            <p> </p>
                            <form action="{{route('index')}}">
                                <button class = "btn btn-danger btn-xs btn-block">Volver a comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>