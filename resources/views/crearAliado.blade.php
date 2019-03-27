@extends('layouts.app')
<br><br>

@if (session('status'))
<div class="alert alert-success">
	{{ session('status') }}
</div>
@endif

<div class="container-fluid" align="center" style="background-color: #F6F19D;" style="margin:0 auto">
	<div class="col px-md-5 p-5 border bg-light">
		<form action="/guardarAliado" method="POST" enctype="multipart/form-data">
			<h3 style="font-style: italic;">Registrar aliado</h3>
			<br><br><br>
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
			<button type="submit" class="btn btn-primary" style="max-width: 380; max-height: 40;">Registrar aliado</button>
		</form>
	</div>
</div>