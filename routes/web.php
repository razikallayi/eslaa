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


Route::get('clear',function(){
	Artisan::call('view:clear');
	Artisan::call('route:clear');
	Artisan::call('config:clear');
	Artisan::call('cache:clear');
	Artisan::call('auth:clear-resets');
	Artisan::call('clear-compiled');
	dd('cleared cache files');
});


Route::get('/', 'MasterController@index');
Route::get('about', 'MasterController@about');
Route::get('career', 'MasterController@career');
Route::get('clients', 'MasterController@clients');
Route::get('modern-law', 'MasterController@modernLaw');
Route::get('news', 'MasterController@news');
Route::get('news/{slug}', 'MasterController@newsDetails');
Route::get('publications', 'MasterController@publications');
Route::get('service', 'MasterController@service');
Route::get('team', 'MasterController@team');


Route::get('contact', 'MasterController@contact');
Route::post('contact', 'MasterController@contact_mail');

Auth::routes();

Route::redirect('home', 'admin');
Route::group([
	'prefix' => 'admin',
	'middleware' => 'auth'], function () {

	Route::get('/', 'DashboardController@index');
	Route::get('my-account', 'DashboardController@myAccount');
	Route::put('my-account', 'DashboardController@updateAccount');

	Route::get('services','ServiceController@index');
	Route::get('services/add','ServiceController@create');
	Route::post('services','ServiceController@store');
	Route::get('services/edit/{id}','ServiceController@create');
	Route::put('services/edit/{id}','ServiceController@store');
	// Route::get('services/sort','ServiceController@servicesCardView');
	// Route::post('services/sort','ServiceController@sort');
	Route::post('services/image','ServiceController@saveImage');
	Route::delete('services/{id}','ServiceController@destroy');


	Route::get('teams','TeamController@index');
	Route::get('teams/add','TeamController@create');
	Route::post('teams','TeamController@store');
	Route::get('teams/edit/{id}','TeamController@create');
	Route::put('teams/edit/{id}','TeamController@store');
	// Route::get('teams/sort','TeamController@teamsCardView');
	// Route::post('teams/sort','TeamController@sort');
	Route::post('teams/image','TeamController@saveImage');
	Route::delete('teams/{id}','TeamController@destroy');


	Route::get('news','NewsController@index');
	Route::get('news/add','NewsController@create');
	Route::post('news','NewsController@store');
	Route::get('news/edit/{id}','NewsController@create');
	Route::put('news/edit/{id}','NewsController@store');
	// Route::get('news/sort','NewsController@newsCardView');
	// Route::post('news/sort','NewsController@sort');
	Route::post('news/image','NewsController@saveImage');
	Route::delete('news/{id}','NewsController@destroy');

});
