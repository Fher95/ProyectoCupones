@if(Auth::check())
      
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ auth()->user()->nombreUsuario }}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('home') }}">Perfil</a>
          <a class="dropdown-item" href="{{route('cupones')}}">Mis Cupones</a>
          @if(auth()->user()->rolAdministrador==1)
                <a class="dropdown-item" href="{{route('crearCupon')}}">Crear Cupon</a>
                <a class="dropdown-item" href="#">Crear Aliado</a>
            @elseif(auth()->user()->rolPublicista==1)
                <a class="dropdown-item" href="{{route('crearCupon')}}">Crear Cupon</a>
            @endif
            
          <a class="dropdown-item" href="{{ url('/logout') }}"> 
                            @csrf
                            Cerrar Sesion
                    </a>
        </div>
      </li>
    <li class="nav-item ">
        <a href="cart.html" class="cart-nav"><img src="img/core-img/cart2.png" alt=""><a class="text-white">(0)</a></a>
    </li>
    
@else
    <li class="nav-item active">
        <a class="nav-link " href="{{route('login')}}">Iniciar Sesion</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link   " href="{{route('register')}}">Registrarse</a>
    </li>
    <li class="nav-item ">
        <a href="cart.html" class="cart-nav"><img src="img/core-img/cart2.png" alt=""><a class="text-white">(0)</a></a>
    </li>  
@endif
