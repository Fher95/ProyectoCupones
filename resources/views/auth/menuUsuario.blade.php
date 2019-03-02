@if(Auth::check())
    <li class="nav-item active">
        <a class="nav-link " href="">FUNCIONO HPTA!!</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link   " href="">Cerrar Sesion</a>
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
