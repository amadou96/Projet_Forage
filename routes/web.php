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

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/test', function () {
    return view('layout.form');
}); */
Route::get('/test1', function () {
    return "HELLO";
});
Auth::routes();
 Route::get('/clients/create', function () {
    return view('clients.create');
}); 
Route::get('/abonnements/create', function () {
    return view('abonnements.create');
}); 
Route::get('/listeclient', function () {
        return view('clients.index');  
    });
Route::get('/clients/selectvillages', function () {
        return view('clients.selectvillage');  
    })->name('clients.selectvillage');

Route::get('/abonnements/selectclient', function () {
        return view('abonnements.selectclient');  
    })->name('abonnements.selectclient');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clients/list', 'ClientController@list')->name('clients.list');
Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::get('/compteurs/list', 'CompteurController@list')->name('compteurs.list');
Route::get('/compteurs/listfree', 'CompteurController@listfree')->name('compteurs.listfree');
Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
Route::resource('villages', 'VillageController');
Route::resource('clients', 'ClientController');

Route::resource('compteurs', 'CompteurController');
Route::get('/abonnements/selectcompteur', function () {
    return view('abonnements.selectcompteur');  
})->name('abonnements.selectcompteur');
Route::get('/abonnements/list', 'AbonnementController@list')->
name('abonnements.list');
Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
Route::get('/abonnements/selectcompteur', 'AbonnementController@selectcompteur')->name('abonnements.selectcompteur');
Route::get('/abonnements/selectclient', 'AbonnementController@selectclient')->name('abonnements.selectclient');

Route::resource('abonnements', 'AbonnementController');

