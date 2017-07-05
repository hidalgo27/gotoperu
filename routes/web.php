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
Route::get('/packages/{duration}-days', [
    'uses' => 'HomeController@duration',
    'as' => 'duration_show_path',
]);
Route::get('/packages/{type}', [
    'uses' => 'HomeController@type',
    'as' => 'type_show_path',
]);

Route::get('/packages/{type}/{duration_type}', [
    'uses' => 'HomeController@duration_type',
    'as' => 'duration_type_show_path',
]);

//---category
Route::get('/category', [
    'uses' => 'HomeController@category',
    'as' => 'category_path',
]);
//---destinarions
Route::get('/destinations', [
    'uses' => 'HomeController@destinations',
    'as' => 'destinations_path',
]);
Route::get('/destinations/{title}', [
    'uses' => 'HomeController@destinations_sow',
    'as' => 'destinations_show_path',
]);
//---itinerary
Route::get('/travel-packages/{titulo}', [
    'uses' => 'HomeController@show',
    'as' => 'home_show_path',
]);

//---form
Route::post('/design', [
    'uses' => 'HomeController@mail',
    'as' => 'mail_path',
]);

//Route::get('cliente/login', [
//    'uses' => 'ClientAuthController@index',
//    'as' => 'client_auth_index_path',
//]);
