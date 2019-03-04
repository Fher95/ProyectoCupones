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
                        <h1>Bienvenido {{ auth()->user()->nombreUsuario }}</h1>                        
                    </div>
                    <div class = "panel-body">
                        <p>E-mail: {{auth()->user()->email}}</p>
                        <p>Telefono: {{auth()->user()->telefonoUsuario}}</p>
                    </div>
                    <div class = "panel-footer">
                        <form action="{{route('principal')}}">
                            <button class = "btn btn-danger btn-xs btn-block">Ir de compras</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection