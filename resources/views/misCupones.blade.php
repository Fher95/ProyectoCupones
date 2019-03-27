<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis cupones comprados</title>
</head>
<body>

  
  @include('navbar')
<h3 align="center">Mis cupones</h3>
    <div class="container-fluid">
   <div class="row">
    
        @foreach($compras as $compra)
       
  <div class="col-sm-6 col-md-4 col-lg-3">
    
    <div class="card  border-dark mb-12" >
        
    <img class="imgCard" src="../{{(\App\Cupon::find($compra->idCupon))->URLImagenCupon}}" alt="Card image cap">
    
  <ul class="list-group   list-group-flush">
    <li class="list-group-item">{{ (\App\Cupon::find($compra->idCupon))->nombreCupon }}</li>
   
  <div class="card-body">
      <p class="card-text">Número de cupones comprados: {{ $compra->cantidad }}</p>
     <p class="card-text">Descuento otrogado:{{ (\App\Cupon::find($compra->idCupon))->descuentoCupon }}%</p>
     <h4 class="card-text">Precio Final:  ${{ ((\App\Cupon::find($compra->idCupon))->precioCupon)*(1-(((\App\Cupon::find($compra->idCupon))->descuentoCupon)/100)) }}</h4>
    
  </div>
  <div class="card-footer">
                    <form action="{{ route('storeRedimido', ['fechaCompra' => $compra->fechaCompra, 'idCupon' => $compra->idCupon] )}}">
                        <button class="btn btn-dark">Redimir</button>
                    </form>
                </div>
</div>
</br>
 </div>
 
  @endforeach()
 </div>

</div>


</body>
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
</html>
