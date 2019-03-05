@include('navbar')
<p>s</p>
<p>s</p>
<p>s</p>
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
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control" id="categoria" name="categoriaCupon">
      <option>Electrodomesticos</option>
      <option>Comida</option>
      <option>Ropa</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Empresa Responsable</label>
    <select class="form-control" id="aliado" name="empresaAliada">
      <option>LG</option>
      <option>El Corral</option>
      <option>Superdry</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Precio</label>
    <input name="precioCupon" class="form-control" type="text" placeholder="Precio">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Descuento</label>
    <input name="descuentoCupon" class="form-control" type="text" placeholder="Descuento">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Total autorizados</label>
    <input name="totalAutorizados" class="form-control" type="text" placeholder="Total autorizados">
  </div>
  <button type="submit" class="btn btn-primary">Crear cupon</button>
</form>
    </div>
</div>