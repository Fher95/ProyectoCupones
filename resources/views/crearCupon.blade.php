@include('navbar')

<p>s</p>
<p>.</p>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid">
<div class="col px-md-5 p-5 border bg-light">
<form action="/guardarCupon" method="POST" enctype="multipart/form-data"> 
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input name="nombreCupon" class="form-control" type="text" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Cargar imagen</label>
    <input name="URLImagenCupon" type="file" class="form-control-file">
  </div>
  
  <div class="form-group">
   <div class="row">
    <label for="exampleFormControlSelect1">Categoria</label>
    </div>
    <div class="row">
    <select class="form-control" id="categoria" name="categoriaCupon">
      <option>Electrodomesticos</option>
      <option>Comida</option>
      <option>Ropa</option>
    </select>
    </div>
    
  </div>
  <div class="form-group">
  <div class="row">
    <label for="exampleFormControlSelect2">Empresa Responsable</label>
  </div>
  <div class="row">
    <select class="form-control" id="aliado" name="empresaAliada">
      @foreach($aliados as $empresa)
        <option value='{{ $empresa->idAliado }}'>{{ $empresa->nombreAliado }}</option>
      @endforeach();
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Precio</label>
    <input name="precioCupon" class="form-control" type="text" placeholder="Ingrese un precio">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Porcentaje Descuento</label>
    <input name="descuentoCupon" class="form-control" type="text" placeholder="Ingrese un porcentaje (un número de 1 a 100)">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Cupones autorizados</label>
    <input name="totalAutorizados" class="form-control" type="text" placeholder="Ingrese el total de cupones autorizados">
  </div>
  <button type="submit" class="btn btn-primary">Crear cupon</button>
</form>
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
