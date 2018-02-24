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
    
    $products=\App\Products::select(["name","id","picture","picture_description"])->get();
    $packages= \App\Packages::select(["name","package_id","comes_with","importance","picture","picture_description"])->get();
//  
    return view('welcome')->with(["products"=>$products,"packages"=>$packages]);
});
Auth::routes();
Route::get('/profile', 'ProfileController@index')->name('home');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::post('product-management/search', 'ProductManagementController@search')->name('product-management.search');
Route::resource('product-management', 'ProductManagementController');
        
        Route::post('content-management/search', 'ContentManagementController@search')->name('content-management.search');
Route::resource('content-management', 'ContentManagementController');


Route::post('menu-management/search', 'MenuManagementController@search')->name('menu-management.search');
Route::resource('menu-management','MenuManagementController');



Route::post('advantage-management/search', 'AdvantageManagementController@search')->name('advantage-management.search');
Route::resource('advantage-management','AdvantageManagementController');

Route::post('package-management/search', 'PackageManagementController@search')->name('package-management.search');
Route::resource('package-management','PackageManagementController');


Route::get('/product/get', 'AjaxController@get');

Route::get('/home', 'HomeController@index')->name('home');
