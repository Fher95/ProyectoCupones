<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupón redimido</title>
</head>
<body>
    @extends('layouts.app')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>¡ CUPON REDIMIDO !</strong></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class = "panel-heading">
                            <h1>¡{{ auth()->user()->nombreUsuario }} tu cupon ha sido redimido con exito!</h1>
                        </div>
                        <div class = "panel-body">
                            <p>Acercate al punto de venta mas cercano y muestrales tu codigo:</strong></p>
                            <p>Codigo: <strong>{{$hash}}</strong></p>
                        </div>
                        <div class = "panel-footer">
                            <form action="{{route('index')}}">
                                <button class = "btn btn-dark btn-xs btn-block">Volver a comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>