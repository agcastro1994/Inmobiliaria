@extends('layouts.master')


@section('content')
 <div class="col-md-8 blog-main">
	<h1>Agregar Imagenes</h1>

	<form method="POST" action="/images" files="true" enctype="multipart/form-data">
			
			{{ csrf_field() }}

			<div class="form-group">
	  <label for="Archivo"><b>Seleccione una imagen: </b></label><input type="file" name="archive" id="archive">
	  </div>

	   <div class="form-group">
	  	<button type="submit" class="btn btn-success">Subir imagenes</button>
	  </div>
	</form>

	<a href="/home"><button type="button" class="btn btn-primary">Finalizar</button> </a>
			
  </div>


@endsection
