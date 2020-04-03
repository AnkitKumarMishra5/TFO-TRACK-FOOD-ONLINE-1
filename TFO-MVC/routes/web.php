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

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/orders', function () {
    return view('pages.orders');
});

Route::redirect('/','/login');

Route::post('/login','session_controller@login');

Route::post('/register','session_controller@register');

Route::get('/home','controller1@home');

Route::get('/restaurant','controller1@restaurant');

Route::get('/logout','session_controller@logout');
