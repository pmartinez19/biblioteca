<?php

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

Route::get('/usuarios', function () {
    return view('home');
});

Route::get('/', function(){
    $listado=App\Models\LLIBRES::all();
    //var_dump($listado);
    foreach($listado as $p) {
    echo $p->titol . "<br />";
    }
    });

Route::get('/cataleg/{name}', function ($name) {
    return view('cataleg.'.$name);
});
//Auth::routes(); TODO

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
