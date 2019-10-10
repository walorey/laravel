<!DOCTYPE html>
<html>
<head>
	<title>Mensaje recibido</title>
</head>
<body>

	<p> Tienes un mensaje nuevo de: {{ $msg['name']}} - {{ $msg['email']}}</p>
	<p><strong>Asunto: {{$msg['subject']}}</strong></p>
	<p><strong>Asunto: {{$msg['content']}}</strong></p>

</body>
</html>