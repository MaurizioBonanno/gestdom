<?php

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

use App\Models\Immobili;
use App\Models\News;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi_siamo',function(){
    return view('chisiamo');
});

Route::get('/per_comprare',function(){
    return view('comprare');
});


Route::get('/per_vendere',function(){
    return view('vendere');
});

Route::get('/valutazioni',function(){
    return view('valutazioni');
});

Route::get('/contatti',function(){
    return view('contatti');
});

Route::get('/new/{id}','NewsController@frontend_new');

Route::get('/news','NewsController@frontend_index');

Route::get('/immobili','ImmobiliController@frontend_index');

