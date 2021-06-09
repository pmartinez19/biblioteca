<?php

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


Route::get('/llista', function(){
    $listado=App\Models\LLIBRES::all();
    //var_dump($listado);
    return view("llista", array("exemplars" =>$listado));
    });

Route::get('/welcome', function(){
 return view("welcome") ;
});

Route::get('/cataleg/{name}', function ($name) {
    return view('cataleg.'.$name);
});
//Auth::routes(); TODO

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//TODOO
Route::get('/consulta/{id}', function($id){
    $exemplar = App\Models\LLIBRES::where('id',1)->get();
    return view('llibre', array('llibre'=>$exemplar[0]));
    });