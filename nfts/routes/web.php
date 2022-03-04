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

Route::get('/', function () {
    return view('front.index');
});
Route::get('/contacto',function (){
    echo "HOLA ESTA EN CONTACTO";

});
Route::get ('/productos',function (){
    $color = "#fA0011";
    $usuario ="Doroteo";
    $num = rand(1,50);
    return view('front.productos')
        ->with('colorsote',$color)
        ->with('usuario', $usuario)
            ->with('numero',$num);
    });
