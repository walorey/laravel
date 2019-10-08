@section('title')
	Contacto
@endsection

@extends('layout')

@section('contenido')

	{{-- para traducir un titulo: la traduccion la busca en un json en la carpeta lang, respetar mayusculas y minisculas,
	depende el idioma es.json o en.json se pueden usar varias --}}
	<h1>{{__('Contact')}}</h1>

	{{-- otra forma es poniendo @lang('Contact') --}}

	<form method="POST" action="{{route('contacto')}}">
		@csrf
		<input name="name" placeholder="Nombre" value="{{old('name')}}"><br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}

		<input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
		{!! $errors->first('email', '<small>:message</small><br>') !!}

		<input name="subject" placeholder="Asunto" value="{{old('subject')}}"><br>
		{!! $errors->first('subject', '<small>:message</small><br>') !!}

		<textarea name="content" placeholder="Contenido">{{old('content')}}</textarea><br>
		{!! $errors->first('content', '<small>:message</small><br>') !!}


		<button>Enviar</button>
	</form>

@endsection