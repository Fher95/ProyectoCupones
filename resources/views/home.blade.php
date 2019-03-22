@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Perfil</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class = "panel-heading">
                        <h1>¡Bienvenido <strong>{{ auth()->user()->nombreUsuario }}!</strong></h1>
                    </div>
                    <div class = "panel-body">
                        <p>E-mail: <strong>{{auth()->user()->email}}</strong></p>
                        <p>Telefono: <strong>{{auth()->user()->telefonoUsuario}}</strong></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection