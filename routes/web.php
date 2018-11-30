<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return('Olá Milton');
});

Route::get('/1', function(){

	return ('Você digitou 1');
});

Route::get('/2', function(){

	return ('Você digitou 2');
});

Route::get('/array', function(){
$arr = array(1,2,3,'Milton','Marisa','Marcelo');
return $arr;

});

Route::get('/view', function(){
return view('teste');

});

Route::get('/subpasta', function(){
	return view('inc.another.subpasta');

});