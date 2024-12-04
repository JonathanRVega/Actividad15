<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajesController;

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

Route::get('/personajes', [PersonajesController::class, 'index']);
Route::get('/pelicula/{id}', [PersonajesController::class, 'showPelicula']);