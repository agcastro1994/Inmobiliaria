@extends('layouts.master')


@section('content')

 <section class="main">
            <div class="eslogan">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus veniam neque, est rerum magnam obcaecati.</p>
            </div>
            <h3>{{ $post->title }}</h3>
            
            <div class="galeria" id="galeria">

	  <?php $x=0;  ?>
	 @foreach ($images as $image)
              
              
                <div class="inmueble show">
                  <div class="foto">
                    <img src="{{ $image->route }}" width="400px" height="300px">   
                  </div>
                  @if (Auth::check())
                     <a href="/posts/delete/image/{{ $image->id }}"> <button class="btn " id="btnGaleria">Eliminar</button></a>
                  @endif
              </div>
              <?php $x++;  ?>
     @endforeach

      @if($x < 3)
                @if($x%3==2)
                    <div class="inmueble show"></div>
                @endif
                @if($x%3==1)
                    <div class="inmueble show"></div>
                   <div class="inmueble show"></div>
                @endif
            @endif

            @if($x > 3)
                @if($x%3==2)
                   <div class="inmueble show"></div>
                @endif
                @if($x%3==1)
                   <div class="inmueble show"></div>
                    <div class="inmueble show"></div>
                @endif
            @endif

     <!-- <div class="inmueble"> -->
                  <div class="descripcion">
                        
                        <div class="caracteristicas">{{$post->resume}}</div>
                        
                        <div class="caracteristicas show">{{$post->description}}</div>
                        
                  </div>    
                <!-- </div>  --> 
                </div>
                </section>                             

             

@endsection