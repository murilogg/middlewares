<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class UsuarioControlador extends Controller
{
	public function __construct(){
		//$this->middleware('primeiro');
	}

    public function index(){
    	Log::debug('UsuarioControlador@index');
    	return '<h3>LISTA DE USUARIOS (middlewares)</h3>'.
    	       '<ul>'.
    	       '<li>Joao</li>'.
    	       '<li>Maria</li>'.
    	       '<li>Murilo</li>'.
    	       '<li>Marcos</li>'.
    	       '</ul>';
    }
}
