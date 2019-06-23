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

Route::get('/xyz', function () {
    return view('welcome');
});

Route::get('/login-buyer', function () {
    return view('auth.login-buyer');
})->name('login-buyer');
Route::get('/login-seller',function () {
    return view('auth.login-seller');
})->name('login-seller');

Route::get('/linkedin-seller',function () {
    return view('auth.linkedin-seller');
})->name('linkedin-seller');
Route::get('/linkedin-buyer',function () {
    return view('auth.linkedin-buyer');
})->name('linkedin-buyer');
Route::get('/buyer-home',function () {
    return view('frontend.buyer-home');
})->name('buyer-home');
Route::get('/category-details',function () {
    return view('frontend.category-details');
})->name('category-details');
Route::get('/category',function () {
    return view('frontend.category');
})->name('category');
Route::get('/buyer-dashboard',function () {
    return view('frontend.buyer-dashboard');
})->name('buyer-dashboard');
Route::get('/seller-dashboard',function () {
    return view('frontend.seller-dashboard');
})->name('seller-dashboard');
Route::get('/technology-buyer',function () {
    return view('frontend.technology-buyer');
})->name('technology-buyer');
Route::get('/dasboard',function () {
    return view('frontend.dasboard');
})->name('dasboard');
Route::get('/view-seller',function () {
    return view('frontend.profile-view');
})->name('view-seller');
Route::get('/view-buyer',function () {
    return view('frontend.profile-view');
})->name('view-buyer');
Route::get('/my-profile',function () {
    return view('frontend.profile-view');
})->name('my-profile');

Route::get('auth/linkedin', 'Auth\LoginController@redirectToProvider')->name('login.linkedin');
Route::get('auth/linkedin/callback', 'Auth\LoginController@handleProviderCallback');
?>