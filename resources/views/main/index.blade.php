@extends('layouts.master')


@section('content')
	
           @include('layouts.jumbotron')
        
        <section class="main">
            <div class="eslogan" id="eslogan">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus veniam neque, est rerum magnam obcaecati.</p>
            </div>
            <h3>Galeria</h3> 
            @if (Auth::check())
            <h4> <a href="/posts/create">Crear Post</a></h4>
            @endif
                <div class="galeria" id="galeria">
                <!-- <div class="inmueble">
                    <div class="foto">
                        <img src="https://cdn.trendir.com/wp-content/uploads/old/house-design/assets_c/2014/02/beautiful-house-courtyard-swimming-pool-1-thumb-970xauto-34265.jpg" alt="">
                    </div>
                    <div class="descripcion">
                        <div class="nombre">Lorem, ipsum dolor.</div>
                        <div class="caracteristicas">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, quia.</div>
                        <button class="btn" id="btnGaleria">Ver</button>
                    </div>    
                </div>
                <div class="inmueble">
                    <div class="foto">
                        <img src="https://cdn.trendir.com/wp-content/uploads/old/house-design/assets_c/2014/02/beautiful-house-courtyard-swimming-pool-1-thumb-970xauto-34265.jpg" alt="">
                    </div>
                    <div class="descripcion">
                        <div class="nombre">Lorem, ipsum dolor.</div>
                        <div class="caracteristicas">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, quia.</div>
                        <button class="btn" id="btnGaleria">Ver</button>
                    </div>    
                </div>
                <div class="inmueble">
                    <div class="foto">
                        <img src="https://cdn.trendir.com/wp-content/uploads/old/house-design/assets_c/2014/02/beautiful-house-courtyard-swimming-pool-1-thumb-970xauto-34265.jpg" alt="">
                    </div>
                    <div class="descripcion">
                        <div class="nombre">Lorem, ipsum dolor.</div>
                        <div class="caracteristicas">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, quia.</div>
                        <button class="btn" id="btnGaleria">Ver</button>
                    </div>    
                </div>
                <div class="inmueble">
                    <div class="foto">
                        <img src="https://cdn.trendir.com/wp-content/uploads/old/house-design/assets_c/2014/02/beautiful-house-courtyard-swimming-pool-1-thumb-970xauto-34265.jpg" alt="">
                    </div>
                    <div class="descripcion">
                        <div class="nombre">Lorem, ipsum dolor.</div>
                        <div class="caracteristicas">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, quia.</div>
                        <button class="btn" id="btnGaleria">Ver</button>
                    </div>    
                </div>
                <div class="inmueble">
                    <div class="foto">
                        <img src="https://cdn.trendir.com/wp-content/uploads/old/house-design/assets_c/2014/02/beautiful-house-courtyard-swimming-pool-1-thumb-970xauto-34265.jpg" alt="">
                    </div>
                    <div class="descripcion">
                        <div class="nombre">Lorem, ipsum dolor.</div>
                        <div class="caracteristicas">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, quia.</div>
                        <button class="btn" id="btnGaleria">Ver</button>
                    </div>    
                </div>
                <div class="inmueble">
                    <div class="foto">
                        <img src="https://cdn.trendir.com/wp-content/uploads/old/house-design/assets_c/2014/02/beautiful-house-courtyard-swimming-pool-1-thumb-970xauto-34265.jpg" alt="">
                    </div>
                    <div class="descripcion">
                        <div class="nombre">Lorem, ipsum dolor.</div>
                        <div class="caracteristicas">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, quia.</div>
                        <button class="btn" id="btnGaleria">Ver</button>
                    </div>    
                </div>
               
            </div>  -->

        
        <?php $x=0;  ?>
        
                @foreach($posts as $post)
                 
                   @include ('main.post')
                 <?php $x++;  ?>
                 @endforeach
              

            @if($x < 3)
                @if($x%3==2)
                    <div class="inmueble"></div>
                @endif
                @if($x%3==1)
                    <div class="inmueble"></div>
                    <div class="inmueble"></div>
                @endif
            @endif

            @if($x > 3)
                @if($x%3==2)
                    <div class="inmueble"></div>
                @endif
                @if($x%3==1)
                    <div class="inmueble"></div>
                    <div class="inmueble"></div>
                @endif
            @endif

          
            <?php echo $posts->fragment('eslogan')->links(); ?>

                
        </div>


     

        </section>
        <div class="relleno"></div>
        <section class="acerca-de" id="acercaDe">
            <h3>Acerca de</h3>
            <div class="foto">
                <img src="images/persona.jpg" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam veritatis illum autem a fuga maxime, consequatur, modi laboriosam ex ab qui deleniti rerum perferendis minima.</p>
        </section>
        <section class="contacto" id="contacto">
            <h3>Contacto</h3>
            <p>Telefono: (0295) 333 3333</p>
            <p>Correo: tucorreo@correo.com</p>
        </section>
        
     

     
@endsection