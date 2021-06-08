<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/Productos', 'ProductoController@Index');
 Route::get('/Productos2',function () {
	return view('product2');
});
Route::get('/Productos3',function () {
	return view('product3');
});
Route::get('/Unirse',function () {
	return view('Unirse');
});
Route::get('/Ayuda',function (){
	return view('Ayuda');
});
Route::get('/Login',function(){
	return view('Login');
});
Route::post('/Loginp','UserController@authenticate');
Route::get('Mapa',function(){
	return view('Mapa');
});

Route::get('/getProductos/{nombre}','ProductoController@getProductos');
Route::post('/pullProducto/','InsertController@pull')->name('POST');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::group(['middleware'=>['jwt.verify']],function(){
	Route::post('/Subir','UserController@register');
	Route::get('/Subir','InsertController@Index');
});