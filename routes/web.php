<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\GeneralObetenerController;
use App\Http\Controllers\PruebaController;
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

Route::post('/login', [AuthController::class, 'logIn']);
Route::post('/logInit', [AuthController::class, 'init']);
Route::get('/loginRoute', [PruebaController::class, "hola"]);
Route::get('/logoutRoute', [PruebaController::class, "hola2"]);
Route::get('/errorRoute', [PruebaController::class, "hola3"]);
Route::post('/logout', [AuthController::class, 'logOut']);
Route::post('/loginProveedor', [AuthController::class, 'logInProveedores']);
Route::get('/info_user', [AuthController::class, 'infoUser']);
//Route::post('/logoutProveedor', [AuthController::class, 'logOut']);
Route::get('refresh-csrf', function(){
    return csrf_token();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/saml2/mzzo/logoutP', [PruebaController::class, 'logoutP']);

Route::get('/generate/faldores/dispach', [PruebaController::class, 'testArq']);
Route::get('/generate/faldores/dispach/{idCampana}', [PruebaController::class, 'testArq2']);