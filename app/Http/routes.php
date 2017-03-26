<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','Front@index');





Route::get('/api/v1/cart', 'Front@cart');
Route::get('/api/v1/addtocart/{id?}', 'Front@addtocart');

Route::get('/api/v1/deletetocart/{id?}', 'Front@deletetocart');


Route::get('/login',function()
{
    return view('login');
});

Route::post('/registered','Front@register');
//Route::post('/deletecarts','Front@deleteCart');



//Route::post('/login','Front@authenticate');



Route::get('/cart', 'Front@cart');
Route::post('/cart', 'Front@cart');

Route::get('/kids', 'Front@kids');
Route::get('/Kids-Dressing-Up', 'Front@KidsDressingUp');
Route::get('/Kids-Stationery', 'Front@KidsStationery');
Route::get('/Kids-Toys-&-Puzzles', 'Front@KidsToysPuzzles');
Route::get('/New-In-Kids', 'Front@NewInKids');






Route::auth();

Route::get('/login', 'HomeController@index');
