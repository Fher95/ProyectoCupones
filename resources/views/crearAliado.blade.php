
@include('navbar')


@if (session('status'))
<div class="alert alert-success">
	{{ session('status') }}
</div>
@endif

<div class="container-fluid" align="center"  style="margin:0 auto">
	<div class="row align-items-center">

			<div class="col-md-4"></div>
		<div class="col-md-4 col-md-offset-3 border bg-light col-center">
		<form action="/guardarAliado" method="POST" enctype="multipart/form-data">
			<h3 style="font-style: italic;">Registrar aliado</h3>
			<br>
			@csrf
			<div class="form-group">
				<label for="nombreCupon">Nombre del aliado</label>
				<input type="text" id="nombreAliado" name="nombreAliado" class="form-control" style="max-width: 380; max-height: 30;">
			</div>
			<div class="form-group">
				<label for="telefonoAliado">Teléfono del aliado</label>
				<input type="text" id="telefonoAliado" name="telefonoAliado" class="form-control" style="max-width: 380; max-height: 30;">
			</div>
			<div class="form-group">
				<label for="direcciónAliado">Dirección del aliado</label>
				<input type="text" id="direccionAliado" name="direccionAliado" class="form-control" style="max-width: 380; max-height: 30;">
			</div>
			<button type="submit" class="btn btn-dark" style="max-width: 380; max-height: 40;">Registrar aliado</button>
			</br></br>
		</form>
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