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


//web page
//---homepage
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home_path',
]);
//---packages
Route::get('/packages', [
    'uses' => 'HomeController@packages',
    'as' => 'packages_path',
]);
//---packages
Route::get('/destinations', [
    'uses' => 'HomeController@destinations',
    'as' => 'destinations_path',
]);
//---itinerary
Route::get('/packages/{titulo}', [
    'uses' => 'HomeController@show',
    'as' => 'home_show_path',
]);

//Route::get('cliente/login', [
//    'uses' => 'ClientAuthController@index',
//    'as' => 'client_auth_index_path',
//]);
