<?php

//use App\Http\Middleware\PrimeiroMiddleware;

Route::get('/', 'UsuarioControlador@index')
      ->middleware('primeiro', 'segundo');

Route::get('/terceiro', function(){
	return 'Passou pelo terceiro Middleware';
})->middleware('terceiro:murilo,21');
