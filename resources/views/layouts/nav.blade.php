
			<nav>
                <h1><a href="/home">Inmobiliaria</a></h1>
                <div class="menu">
                    <a href="#" class="acerca-de-menu">Acerca De</a>
                    <a href="#" class="galeria-menu">Galeria</a>
                    <a href="#" class="contacto-menu">Contacto</a>
                     @if (Auth::check())
                    <a class="contacto-menu" href="{{ route('logout') }}"
   					onclick="event.preventDefault();
   					document.getElementById('logout-form').submit();">
    				Cerrar sesion </a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
    				{{ csrf_field() }}
					</form>
                    @endif
                </div>    
            </nav>

