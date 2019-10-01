<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'titulo por defecto')</title>
	<style>

		.active a {

			color: red;
			text-decoration: none;
		}

	</style>

</head>
<body>

	@include('partials.nav')
	@yield('contenido')

</body>
</html>