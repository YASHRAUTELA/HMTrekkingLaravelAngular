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
})->name('main');

Route::get('/camp','HomeController@display_camp_pics')->name('camp_pics');

Route::get('/tourist','HomeController@display_tourists_pics')->name('tourist_pics');

Route::get('/contact','HomeController@display_contact_us')->name('contact_us');

Route::get('/about','HomeController@display_about_us')->name('about_us');

Route::get('/myAdmin',function(){
	return view('admin.default');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');