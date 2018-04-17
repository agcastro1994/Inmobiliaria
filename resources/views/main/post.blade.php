
           
            
            @foreach ($images as $image)
              
              @if($image->post_id == $post->id )
                <div class="inmueble">
                  <div class="foto">
                    <img src="{{ $image->route }}" height="300px">   
                  </div>
                  <div class="descripcion">
                        <div class="nombre"> {{ $post->title }}</div>
                        <div class="caracteristicas">{{$post->resume}}</div>
                        <a href="/posts/{{ $post->id }}"> <button class="btn" id="btnGaleria">Ver</button></a>
                  </div>    
                </div>                               

              @endif



            @endforeach

          
            
    