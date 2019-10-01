<nav>
	<ul>
		<li class="{{setActive('home')}}"><a href="/">Home</a></li> {{-- cree la clase setActive (dame active si estoy en la ruta que indique), que esta definida en helprs.php --}}
		<li class="{{setActive('about')}}"><a href="/about">About</a></li>
		<li class="{{setActive('portafolio')}}"><a href="/portafolio">Portafolio</a></li>
		<li class="{{setActive('contacto')}}"><a href="/contacto">Contacto</a></li>
	</ul>
</nav>
