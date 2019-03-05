@if(Auth::check())
    <li class="nav-item active">
<<<<<<< HEAD
        <a class="nav-link " href="">NOMBRE_DE_USUARIO!!</a>
=======
        <a class="nav-link " href="{{ route('home') }}">Bienvenido <strong>{{ auth()->user()->nombreUsuario }}</strong></a> 
        <a href=""></a> 
>>>>>>> fa77587f9f65d6e38438230a813880c6e8c36a3e
    </li>
    <li class="nav-item active">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
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
