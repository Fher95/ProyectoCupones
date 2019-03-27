
@extends('layouts.app')

  @include('navbar')

   
    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

    

    <div class="container-fluid" align="center">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><strong>COMPRA DE CUPON</strong></div>
                    <div class="card-body">
                        <h2 class="card-text">{{$cupon->nombreCupon}}</h2>
                       
                    <div style=”padding: 10px; float: left; width: 45%; text-align: justify;”>
                        <img class="imgCard" src="../{{$cupon->URLImagenCupon}}" alt="Card image cap" width="350px" height="350px">
                    </div>
                    
                    <div style=”padding: 10px; float: right; width: 45%; text-align: justify;”>
                        <p class="card-text">Precio: ${{$cupon->precioCupon}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescuento: {{$cupon->descuentoCupon}}%</p>
                        <h4 class="card-text">Precio Final: ${{($cupon->precioCupon) * (1 - (($cupon->descuentoCupon)/100))}}</h4>
                        <h4 class="card-text">Cupones disponibles: {{($cupon->totalAutorizados)}}</h4>
                        <br>
                        <label for="cantidadComprar">Elija cuantos cupones va a comprar</label>
                        <form action="/comprarCupones/{{$cupon->idCupon}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <select class="form-control" id="cantidadCompra" name="cantidadCompra"style="max-width: 380;text-align-last: center;">                        
                                @for($i=1 ; $i<=$cupon->totalAutorizados; $i++)
                                    <option value='{{ $i }}'>{{ $i }}</option>
                                @endfor;
                            </select> 
                            <br>
                            <button type="submit" class="btn btn-dark" style="max-width: 380; max-height: 40;">Comprar</button>
                        </form>
                    </div>
                    
                   
                    </div>
                        
                   
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
          <script src="js/jquery/jquery-2.2.4.min.js"></script>
          <!-- Popper js -->
          <script src="js/popper.min.js"></script>
          <!-- Bootstrap js -->
          <script src="js/bootstrap.min.js"></script>
          <!-- Plugins js -->
          <script src="js/plugins.js"></script>
          <!-- Active js -->
          <script src="js/active.js"></script>

