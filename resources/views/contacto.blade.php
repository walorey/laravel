@section('title')
	Contacto
@endsection

@extends('layout')

@section('contenido')
	<h1>Contacto</h1>

	<form method="POST" action="{{route('contacto')}}">
		@csrf
		<input name="name" placeholder="Nombre" value="{{old('name')}}"><br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}

		<input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
		{!! $errors->first('email', '<small>:message</small><br>') !!}

		<input name="subjet" placeholder="Asunto" value="{{old('subjet')}}"><br>
		{!! $errors->first('subjet', '<small>:message</small><br>') !!}

		<textarea name="content" placeholder="Contenido">{{old('content')}}</textarea><br>
		{!! $errors->first('content', '<small>:message</small><br>') !!}


		<button>Enviar</button>
	</form>

@endsection