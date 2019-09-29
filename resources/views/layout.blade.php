<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'titulo por defecto')</title>
</head>
<body>

	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/portafolio">Portafolio</a></li>
			<li><a href="/contacto">Contacto</a></li>
		</ul>
	</nav>

	@yield('contenido')

</body>
</html>