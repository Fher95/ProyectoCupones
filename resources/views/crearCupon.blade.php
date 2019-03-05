@include('navbar')
<p>s</p>
<p>s</p>
<p>s</p>
<div class="container-fluid">
    <div class="col px-md-5 p-5 border bg-light">
    <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input class="form-control" type="text" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Cargar imagen</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Electrodomesticos</option>
      <option>Comida</option>
      <option>Ropa</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Precio</label>
    <input class="form-control" type="text" placeholder="Precio">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Descuento</label>
    <input class="form-control" type="text" placeholder="Descuento">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Total autorizados</label>
    <input class="form-control" type="text" placeholder="Total autorizados">
  </div>
  <button type="submit" class="btn btn-primary">Crear cupon</button>
</form>
    </div>
</div>