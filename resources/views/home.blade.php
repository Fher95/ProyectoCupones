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
                    <div class = "panel-footer">
                        <form action="{{route('index')}}">
                            <button class = "btn btn-danger btn-xs btn-block">Ir de compras</button>
                        </form>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button style="margin-top: 10px" class="btn btn-danger btn-xs btn-block">Cerrar Sesion</button>
                        </form>
                    </div>
                </div>
            </div>
            
            @if(auth()->user()->rolAdministrador==1)
                @include('menuAdicionalAdmin')
                @elseif(auth()->user()->rolPublicista==1)
                @include('menuAdicionalPublicista')
            @endif
            

        </div>
    </div>
</div>
@endsection