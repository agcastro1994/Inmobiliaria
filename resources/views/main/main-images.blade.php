@extends('layouts.master')


@section('content')
 <div class="col-md-8 blog-main">
	<h1>Seleccione la imagen que desea colocar como portada</h1>

	<form method="POST" action="/main-images" files="true" enctype="multipart/form-data">
			
			{{ csrf_field() }}

			<div class="form-group">
	  <label for="Archivo"><b>Seleccione una imagen: </b></label><input type="file" name="archive" id="archive">
	  </div>

	   <div class="form-group">
	  	<button type="submit" class="btn btn-success">Subir imagen</button>
	  </div>
	</form>

	<!-- <a href="/home"><button type="button" class="btn btn-primary">Finalizar</button> </a> -->
			
  </div>


@endsection
