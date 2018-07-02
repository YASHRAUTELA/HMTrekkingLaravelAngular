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

Route::resource('contact_us','ContactController');

Route::get('/about','HomeController@display_about_us')->name('about_us');

Route::resource('myAdmin','AdminController');

Route::get('/users','AdminController@show_all_user')->name('users');

Route::get('/socialite_users','AdminController@show_socialite_user')->name('socialite_users');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/getCountry','HomeController@getCountry');

Route::resource('accomodation','AccomodationController');

Route::resource('booking','BookingController');

//Admin Panel
Route::get('/camp_gallery_edit','GalleryController@camp_gallery_edit');


Route::group(['middleware'=>['auth']],function(){

});