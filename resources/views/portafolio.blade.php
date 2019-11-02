@section('title')
	Portafolio
@endsection

@extends('layout')

@section('contenido')
	<h1>Portafolio</h1>

	<ul>

		@forelse($projects as $project)
			<li>{{ $project->title }} <br>
				{{-- {{ $portafolioItem->description}} <br>
				LE PODEMOS DAR FORMATO A LAS FECHAS CON ->format()
				{{ $portafolioItem->updated_at->diffForHumans()}} --}}
			</li>
		@empty
			<li>No hay nada por aqui</li>
		@endforelse

		{{ $projects->links()}}

	</ul>

@endsection