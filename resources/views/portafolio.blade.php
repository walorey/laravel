@section('title')
	Portafolio
@endsection

@extends('layout')

@section('contenido')
	<h1>Portafolio</h1>

	<ul>

		@forelse($portafolio as $portafolioItem)
			<li>{{ $portafolioItem['title'] }}</li>
		@empty
			<li>No hay nada por aqui</li>
		@endforelse

	</ul>

@endsection