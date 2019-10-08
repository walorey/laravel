<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
    public function store()
    {
    	request()->validate([

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

    	return 'Datos validados';
    }
}
