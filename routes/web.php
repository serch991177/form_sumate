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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[App\Http\Controllers\FormController::class,'index'])->name('dashboard');
Route::get('/formulario',[App\Http\Controllers\HomeController::class,'formulario'])->name('formulario');
Route::post('/guardar-registro',[App\Http\Controllers\FormController::class,'store'])->middleware('auth')->name('guardar_registro');
Route::get('/Creacion-Usuarios',[App\Http\Controllers\FormController::class,'createuser'])->name('createuser');
Route::get('/formulario-registro',[App\Http\Controllers\FormController::class,'formuser'])->middleware('auth')->name('formulario-registro');
Route::post('/Crear-usuario',[App\Http\Controllers\FormController::class,'crearusuario'])->middleware('auth')->name('crear_usuario');
Route::post('/Actualizar-usuario',[App\Http\Controllers\FormController::class,'updateuser'])->middleware('auth')->name('update_usuario');

Route::post('/editar-funcionario',[App\Http\Controllers\FormController::class,'show'])->middleware('auth')->name('editar_funcionario');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

