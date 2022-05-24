<?php

use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();


Route::get('/', [LoginController::class,'showLoginForm']);



/*Route::get('/register', function () {
    return view('register');
});*/

Route::get('/home', function () {
    return view('home');
})->middleware('auth');


Route::get('/veterinario', function() {
    return view('veterinario.index');
});

Route::get('/veterinario/create', function() {
    return view('veterinario.create');
});

Route::get('/veterinario/editar', function() {
    return view('veterinario.edit');
});

Route::get('/datos',function (){
    return view('datos');
})->name('datos');


Route::resource('usuarios', UsuarioController::class);

Route::resource('mascotas', MascotaController::class);

Route::resource('administrativos', AdministrativoController::class);
Route::resource('clientes',ClienteController::class);