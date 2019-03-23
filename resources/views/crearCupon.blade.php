<link rel="stylesheet" type="text/css" href="crear_cupon.css">
@include('navbar')
<br><br>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid" align="center" style="background-color: #F6F19D;" style="margin:0 auto">
  <div class="col px-md-5 p-5 border bg-light">
  <form action="/guardarCupon" method="POST" enctype="multipart/form-data">
    <br><br>
    <h3 style="font-style: italic;">Registrar cupón</h3>
    <br><br><br>
    @csrf
    <div class="form-group">
      <label for="nombreCupon">Nombre del cupón</label>
      <input type="text" id="nombreCupon" name="nombreCupon" class="form-control" style="max-width: 380; max-height: 30;">
    </div>
    <br>  
    <div class="form-group">
      <div>
      <label for="cargarImagenCupon">Seleccione una imagen del producto</label>
      </div>
      <input name="URLImagenCupon" type="file" class="file" readonly="true">
    </div>
    <br>  
    <div class="form-group">
      <label for="categoriaCupon">Elige la categoría del cupón</label>
      <select class="form-control" id="categoria" name="categoriaCupon"style="max-width: 380; max-height: 30;text-align-last: center">
          <option>Electrodomesticos</option>
          <option>Comida</option>
          <option>Ropa</option>
        </select>
    </div>
    <br>
    <div class="form-group">
      <label for="empresaResponsable">Empresa aliada</label>
      <select name="empresaAliada" id="aliado" class="form-control" style="max-width: 380; max-height: 30;text-align-last: center">
        @foreach($aliados as $empresa)
              <option value='{{ $empresa->idAliado }}'>{{ $empresa->nombreAliado }}</option>
            @endforeach();
      </select>
    </div>
    <br>
    <div class="form-group">
      <label for="precio">Precio del producto</label>
      <input type="number" id="precioCupon" name="precioCupon" class="form-control" style="max-width: 380; max-height: 30; text-align-last: center;" min="1" value="1" onkeyup="precioFinal();">
    </div>
    <br>
    <div class="form-group">
      <label for="descuento">Descuento que se le otorga al cupón en porcentaje</label>
      <input type="number" id="descuento" name="descuentoCupon" class="form-control"style="max-width: 380; max-height: 30; text-align-last: center;" min="0" max="100" value="0" onkeyup="precioFinal();">
    </div>
    <div class="form-group">
      <label for="precioTotal">Precio final con el descuento</label>
      <input type="number" id="definitivo" name="definitivo" class="form-control" value="1" style="max-width: 380; max-height: 30; text-align-last: center;" readonly="readonly">
    </div>
    <br>
    <div class="form-group">
      <label for="cuponesAutorizados">Digite el número de cupones autorizados a vender</label>
      <input type="number" name="totalAutorizados" class="form-control" value="1" min="1" style="max-width: 380; max-height: 30; text-align-last: center;">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" style="max-width: 380; max-height: 40;" onmouseenter="validarCampos()">Registrar cupon</button>
    <br><br><br><br>
  </form>
</div>
</div>

<script type="text/javascript">
  function precioFinal()
  {
    var precio=document.getElementById("precioCupon").value
    var descuento=document.getElementById("descuento").value
    var desTotal=descuento/100
    desTotal=precio*desTotal
    var total = precio - desTotal
    console.log(total)
    document.getElementById("definitivo").value = Math.round(total);
  }
  function validarCampos()
  {
    var nombreCupon=document.getElementById("nombreCupon").value
    var aliado=document.getElementById("aliado").value
    if(nombreCupon == '')
    {
      alert("Algunos campos estan vacío, por favor verificar antes de resgistrar el cupón");
    return false;
    }

  }
</script>

<!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>