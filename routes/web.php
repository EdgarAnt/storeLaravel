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


//this function is for save information, in the moment when we are save in a form
//after of the clase, we write the function what we are use.
Route::post('productos/guardar',[productosController::class, 'store'])->name('productos.store');