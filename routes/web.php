<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(ControladorVistas::class)->group(function(){
   Route::get('/','vistaFormulario')->name('for');
   Route::get('tabla','vistaTabla')->name('tab');
});

Route::post('guardarFormulario', [ControladorVistas::class,'enviarFormulario'])->name('envfor');