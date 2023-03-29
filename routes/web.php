<?php

use App\Http\Controllers\productosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//is important keep the "productos.create"
//Reading the code
//Basically the route is productos/registrar, the controller is in a class, calles create
Route::get('productos/registrar',[productosController::class, 'create'])->name('productos.create');