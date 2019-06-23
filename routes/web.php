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

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth','IsSeller'])->group(function(){
    Route::get('uploads','UploadController@index')->name('seller.upload');
    Route::post('uploads','UploadController@store')->name('seller.upload.store');
});

Route::prefix('administrator')->group(function(){
	
    Route::get('/', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('admin.password.request.submit');
    Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.login.submit');

     Route::middleware(['auth:admin'])->group(function(){
     	Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
        Route::get('dashboard','Admin\SuperAdminController@index')->name('admin.dashboard');
        Route::get('my-profile','Admin\SuperAdminController@profile')->name('admin.profile');
        Route::patch('my-profile','Admin\SuperAdminController@updateProfile')->name('admin.profile.update');


        /*Admin Routes*/
        Route::resource('admins', 'Admin\AdminController', ['names' => [
            'store' => 'admin.admins.store',
            'index' => 'admin.admins.index',
            'create' => 'admin.admins.create',
            'destroy' => 'admin.admins.destroy',
            'update' => 'admin.admins.update',
            'show' => 'admin.admins.show',
            'edit' => 'admin.admins.edit',
        ]]);
        /*Over Admin Routes*/



        /*Category Routes*/
        Route::resource('category', 'Admin\CategoryController', ['names' => [
            'store' => 'admin.category.store',
            'index' => 'admin.category.index',
            'create' => 'admin.category.create',
            'destroy' => 'admin.category.destroy',
            'update' => 'admin.category.update',
            'show' => 'admin.category.show',
            'edit' => 'admin.category.edit',
        ]]);
        /*Over Category Routes*/

         /*Keyword Routes*/
        Route::resource('keywords', 'Admin\KeywordController', ['names' => [
            'store' => 'admin.keywords.store',
            'index' => 'admin.keywords.index',
            'create' => 'admin.keywords.create',
            'destroy' => 'admin.keywords.destroy',
            'update' => 'admin.keywords.update',
            'show' => 'admin.keywords.show',
            'edit' => 'admin.keywords.edit',
        ]]);
        /*Over Keyword Routes*/


         /*Service Routes*/
        Route::resource('services', 'Admin\ServiceController', ['names' => [
            'store' => 'admin.services.store',
            'index' => 'admin.services.index',
            'create' => 'admin.services.create',
            'destroy' => 'admin.services.destroy',
            'update' => 'admin.services.update',
            'show' => 'admin.services.show',
            'edit' => 'admin.services.edit',
        ]]);
        /*Over Service Routes*/


         /*Corporate Seller Routes*/
        Route::resource('corporate-sellers', 'Admin\CorporateSellerController', ['names' => [
            'store' => 'admin.corporate-sellers.store',
            'index' => 'admin.corporate-sellers.index',
            'create' => 'admin.corporate-sellers.create',
            'destroy' => 'admin.corporate-sellers.destroy',
            'update' => 'admin.corporate-sellers.update',
            'show' => 'admin.corporate-sellers.show',
            'edit' => 'admin.corporate-sellers.edit',
        ]]);
        /*Over Corporate Seller Routes*/


         /*Corporate Buyer Routes*/
        Route::resource('corporate-buyers', 'Admin\CorporateBuyerController', ['names' => [
            'store' => 'admin.corporate-buyers.store',
            'index' => 'admin.corporate-buyers.index',
            'create' => 'admin.corporate-buyers.create',
            'destroy' => 'admin.corporate-buyers.destroy',
            'update' => 'admin.corporate-buyers.update',
            'show' => 'admin.corporate-buyers.show',
            'edit' => 'admin.corporate-buyers.edit',
        ]]);
        /*Over Corporate Buyer Routes*/


         /*Buyer Routes*/
        Route::resource('buyers', 'Admin\BuyerController', ['names' => [
            'store' => 'admin.buyers.store',
            'index' => 'admin.buyers.index',
            'create' => 'admin.buyers.create',
            'destroy' => 'admin.buyers.destroy',
            'update' => 'admin.buyers.update',
            'show' => 'admin.buyers.show',
            'edit' => 'admin.buyers.edit',
        ]]);
        /*Over Buyer Routes*/


         /*Seller Routes*/
        Route::resource('sellers', 'Admin\SellerController', ['names' => [
            'store' => 'admin.sellers.store',
            'index' => 'admin.sellers.index',
            'create' => 'admin.sellers.create',
            'destroy' => 'admin.sellers.destroy',
            'update' => 'admin.sellers.update',
            'show' => 'admin.sellers.show',
            'edit' => 'admin.sellers.edit',
        ]]);
        /*Over Seller Routes*/


         /*Industry Routes*/
        Route::resource('industries', 'Admin\IndustryController', ['names' => [
            'store' => 'admin.industries.store',
            'index' => 'admin.industries.index',
            'create' => 'admin.industries.create',
            'destroy' => 'admin.industries.destroy',
            'update' => 'admin.industries.update',
            'show' => 'admin.industries.show',
            'edit' => 'admin.industries.edit',
        ]]);
        /*Over Industry Routes*/


         /*Role Routes*/
        Route::resource('roles', 'Admin\RoleController', ['names' => [
            'store' => 'admin.role.store',
            'index' => 'admin.role.index',
            'create' => 'admin.role.create',
            'destroy' => 'admin.role.destroy',
            'update' => 'admin.role.update',
            'show' => 'admin.role.show',
            'edit' => 'admin.role.edit',
        ]]);
        /*Over Role Routes*/


        /*Settings Routes*/
            Route::get('settings','Admin\SettingController@index')->name('admin.settings.index'); 
            Route::post('settings','Admin\SettingController@store')->name('admin.settings.index.store');    
        /*Over Settings Routes*/

     });
});
