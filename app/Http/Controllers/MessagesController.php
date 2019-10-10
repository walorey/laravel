<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
    	$message = request()->validate([

    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'

    	],

    	//aca es para traducir los mensajes especificamente de este formulario
    	//atributo.regla => 'mensaje'

    	[
    		'name.required' => 'Tenes que darme tu nombre',
    		'content.min' => 'El mensaje es muy corto es muy chico',
    		//tambien se puede usar __('texto'), pero se recomiendo que el texto sea en un solo idioma, luego traducimos eso en el json
    		'email.required' => __('Up a email')


    ]);

    	//Despues de validar los datos enviamos el mail:
    	//Dentro de send() va lo que va a contener el email; igual usamos queue en vez de send
    	Mail::to('facundo.avendano77@gmail.com')->queue(new MessageReceived($message));

    	//este es el driver que usamos para enviar mails, smtp para produccion, log para local, en el archivo .env
		//MAIL_DRIVER=smtp

		// return new MessageReceived($message); muestra el contenido del formulario

    	return 'Datos validados';
    }
}
