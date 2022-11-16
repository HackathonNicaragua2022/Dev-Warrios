<?php

use Illuminate\Support\Facades\Route;

//rutas de PrincipalController
Route::get('/home', 'App\Http\Controllers\PrincipalController@home');
Route::get('/galeria', 'App\Http\Controllers\PrincipalController@galeria');
Route::get('/mapa', 'App\Http\Controllers\PrincipalController@mapa');
Route::get('/nosotros', 'App\Http\Controllers\PrincipalController@nosotros');
Route::get('/login', 'App\Http\Controllers\PrincipalController@ingresar');
Route::get('/contacto', 'App\Http\Controllers\PrincipalController@contacto');
