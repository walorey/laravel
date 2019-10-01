<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
    public function store()
    {
    	request()->validate([

    		'name' => 'required',
    		'email' => 'required|email',
    		'subjet' => 'required',
    		'content' => 'required|min:3'

    	]);

    	return 'Datos validados';
    }
}
