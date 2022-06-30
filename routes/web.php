<?php

use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\CirugiaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnfermedadController;
use App\Http\Controllers\HistorialClinicoController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VacunaController;
use App\Http\Controllers\VeterinarioController;
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

Route::get('/datos',function (){
    return view('datos');
})->name('datos');

Route::get('/historialClinico',function (){
    return view('historialClinico');
})->name('historialClinico');


Route::resource('usuarios', UsuarioController::class);

Route::get('mascotas/datas/{id}', [MascotaController::class, 'datas'])->name('mascotas.datas');
Route::resource('mascotas', MascotaController::class);

Route::get('veterinarios/datas/{id}', [VeterinarioController::class, 'datas']);
Route::resource('veterinarios', VeterinarioController::class);

Route::get('administrativos/datas/{id}', [AdministrativoController::class, 'datas']);
Route::resource('administrativos', AdministrativoController::class);


Route::get('clientes/datas/{id}', [ClienteController::class, 'datas']);
Route::resource('clientes',ClienteController::class);

Route::resource('vacunas', VacunaController::class);    

Route::resource('cirugias', CirugiaController::class); 
Route::resource('enfermedades', EnfermedadController::class);
Route::resource('historiales', HistorialClinicoController::class);
Route::get('bitacoras', [BitacoraController::class, 'index'])->name('bitacoras.index');


Route::get('', function () {
    return view('inicio');
});

Route::resource('servicios',ServicioController::class);

Route::get('/login2', function () {
    return view('login');
});

Route::get('/shop', function () {
    return view('shop.index');
});