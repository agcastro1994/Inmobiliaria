
@extends('layouts.master')


@section('content')
 <div class="col-md-8 blog-main">
	<h1>Editar propiedad</h1>

	<form method="POST" action="/posts/edit/store/{{$post->id}}">
			
			{{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Titulo</label>
	    <input type="text" class="form-control" id="title" name="title" required>
	  </div>
	  
	   <div class="form-group">
	    <label for="body">Resumen - Informacion que se mostrara en la pagina principal</label>
	    <textarea class="form-control" name="resume" id="resume" required></textarea>
	  </div>
	  <div class="form-group">
	    <label for="body">Descripcion</label>
	    <textarea class="form-control" name="description" id="description" required></textarea>
	  </div>

	   <div class="form-group">
	  	<button type="submit" class="btn btn-success">Publicar</button>
	  </div>

	  </form>



		
  </div>
@endsection
