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
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/ensenanzas', function () {
    return view('ensenanzas');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/radio', function () {
    return view('radio');
});

Route::get('/registrocontacto', function () {
    return view('registrocontacto');
});

Route::get('/registrooracion', function () {
    return view('registrooracion');
});

Route::get('/ensenanzas/01/titulo', function () {
    return view('ensenanzas.01_01');
});

Route::resource('contacto', 'ContactoController');
Route::resource('oracion', 'OracionController');

