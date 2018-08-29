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

Auth::routes();
Route::resource("/admin/citation","CitationController");
Route::resource('/admin/inscription','InscriptionController');
Route::resource('/admin/team','TeamController');
Route::resource('/admin/staff','EquipeController');
Route::resource('/admin/actualite','ActualiteController');
Route::resource('/admin/activite','ActiviteController');
Route::resource('/admin/action','ImageActionController');
Route::resource('/admin/text','TextController');
Route::resource('/admin/caroussel','CarousselController');
Route::get('/home', 'HomeController@index')->name('home');
