<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',function(){

	return  view('index');
	//return "holas";

});

Route::group(['prefix' =>'api'],function(){

	Route::resource('comentarios','ControladorComentario',['only'=>['index','store','destroy','show']]);
});

/*App::missing(function($exception){

	return view('index');
});*/
/*if(abort(404)){
	return view('index');
}*/
