<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ImmobiliController;
use App\Http\Controllers\TipologieController;

Route::get('/paglieri_admin',function(){
    return view('admin.default');
})->name('admin_index');


Route::get('/tipologie','TipologieController@index')->name('index_tipologie');

Route::get('/tipologie/{id}/edit','TipologieController@edit');

Route::get('/immobili','ImmobiliController@index')->name('immobili');

Route::get('/photo/{id}','ImmobiliController@photo');

Route::get('/add_immobile', 'ImmobiliController@new');

Route::get('/immobili/{id}/edit','ImmobiliController@edit');

Route::get('/news','NewsController@index')->name('news');

Route::get('/insert_new','NewsController@addnew');

Route::get('/news/{id}/edit','NewsController@edit');

Route::delete('/news/{id}','NewsController@delete');

Route::delete('/iimmo_aadim/immobile_delete/{id}', 'ImmobiliController@delete');

Route::patch('/updated/{id}', 'TipologieController@update');

Route::patch('/updated_new/{id}', 'NewsController@update');

Route::patch('/save_new', 'NewsController@savenew');


Route::patch('/updated_immobile/{id}', 'ImmobiliController@updated');

Route::patch('/saveimmobile', 'ImmobiliController@savenew');

Route::patch('/add_photo/{id}', 'ImmobiliController@savephoto');

Route::delete('/delete_photo/{id}','ImmobiliController@deletephoto');
