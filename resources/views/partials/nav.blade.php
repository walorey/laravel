<nav>
	<ul>
		<li class="{{setActive('home')}}"><a href="/">@lang('Home')</a></li> {{-- cree la clase setActive (dame active si estoy en la ruta que indique), que esta definida en helprs.php --}}
		<li class="{{setActive('about')}}"><a href="/about">@lang('About')</a></li>
		<li class="{{setActive('portafolio')}}"><a href="/portafolio">@lang('Portfolio')</a></li>
		<li class="{{setActive('contacto')}}"><a href="/contacto">@lang('Contact')</a></li>
	</ul>
</nav>
