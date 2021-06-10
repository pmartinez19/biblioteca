<?php

use App\Models\llibres;
use App\Http\Controllers\LlibresController;
use App\Models\users;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ViewErrorBag;

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


Route::get('/welcome', function(){
 return view("welcome") ;
});

Route::get('/cataleg/{name}', function ($name) {
    return view('cataleg.'.$name);
});
//Auth::routes(); TODO
Route::get('/prueba/{id}', function ($id) {
    return llibres::find($id)->prestec;
    
    });
    
Route::get('/llista', [LlibresController::class, 'llista']);
Route::get('/consulta/{id}', [LlibresController::class, 'consulta']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//TODOO
Route::get('/consulta/{id}', function($id){
    $exemplar = App\Models\llibres::where('id',$id)->get();
    return view('llibre', array('llibre'=>$exemplar[0]));
    });