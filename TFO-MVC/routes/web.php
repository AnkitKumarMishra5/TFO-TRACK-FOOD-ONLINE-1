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

//LOGIN ROUTE
Route::get('/login', function () {
    return view('pages.login');
});

//ABOUT ROUTE
Route::get('/about', function () {
    return view('pages.about');
});

//CONTACT ROUTE
Route::get('/contact', function () {
    return view('pages.contact');
});

//CHECKOUT ROUTE
Route::get('/checkout', function () {
    return view('pages.checkout');
});
//ORDERS ROUTE
Route::get('/orders', function () {
    return view('pages.orders');
});

Route::redirect('/','/login');

Route::post('/login','session_controller@login');

Route::post('/register','session_controller@register');

Route::get('/home','controller1@home');

Route::get('/restaurant','controller1@restaurant');

Route::get('/logout','session_controller@logout');
