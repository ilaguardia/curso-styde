<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;

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

Route::get('/base', function () {
    return view('base');
});


Route::get('/', function () {
    return view('welcome');
});

// Pruebas

// Llamando al controlador
Route::get('/usuarios',[UserController::class, 'index'])
        ->name("users");

/* 
Route::get('/usuarios/{id}',[UserController::class, 'show'])
	->where('id', '[0-9]+')
        ->name("users.show");
 * 
 */

Route::get('/usuarios/nuevo',[UserController::class, 'create'])
        ->name("users.create");

Route::post('/usuarios',[UserController::class, 'store'])
        ->name("users.store");

Route::get('/usuarios/{user}/editar',[UserController::class, 'edit'])
        ->name("users.edit");

Route::get('/usuarios/{user}',[UserController::class, 'show'])
        ->name("users.show");

Route::put('/usuarios/{user}',[UserController::class, 'update'])
        ->name("users.update");

/*Route::get('/gestion/usuarios/{id}',[UserController::class, 'show'])
	->where('id', '[0-9]+')
        ->name("users.show"); */

Route::get('/saludo/{name}/{nickname?}', WelcomeUserController::class)
        ->name("welcome"); // Si solo tenemos una función la podemos poner como __invoke y la pilla por defecto. Entonces se usa esta forma














/* Route::get('test',[TestController::class, 'test']);

// Recoge cualquier ruta da igual la anidación
Route::get('/usuarios/nuevo', function () {
    return 'Alta usuario';
});

// Se pueden meter variables y validación de variables
Route::get('/example1/{id}', function ($id) {
    return 'usuarios '.$id;
})->where('id', '[0-9]+'); // cualquier número de dígitos cada uno que sea del 0 al 9

// Se pueden meter variables y validación de variables
Route::get('/example1/user-{id}', function ($id) {
    return 'user '.$id;
})->where('id', '\d+'); // cualquier número de dígitos cada uno que sea del 0 al 9 (w es números + letras)


Route::get('/example1', function () {
    return 'usuarios';
});

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) { //si lleva interrogación es opcional. Añadir valor por defecto
    if ($nickname) {
    return 'saludos '.$name. ' mas conocido por '. $nickname;
    } else     return 'saludos '.$name;
}); 


*/



