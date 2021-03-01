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



Route::get('/', 'FrontendController@getIndex');

Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');

Route::get('category/{id}/{slug}.html', 'FrontendController@getCategory');

Route::get('search', 'FrontendController@getSearch');


//Cart
Route::get('add-to-cart/{id}', 'FrontendController@getAddCart');

Route::get('check-out', 'FrontendController@getCheckOut');

Route::get('update-cart', 'FrontendController@getUpdateCart');

Route::get('update-cart/{id}', 'FrontendController@getUpdateCartId');

Route::get('delete-cart', 'FrontendController@getDeleteCart');

Route::post('check-out', 'FrontendController@postConfirm');


//Backend

Route::group(['prefix'=>'admin'], function(){

    Route::get('login', 'LoginController@getLogin')->middleware('CheckLogin');

    Route::post('login', 'LoginController@postLogin');

    Route::get('home', 'HomeController@getHome')->middleware('CheckLogout');

    Route::get('logout', 'HomeController@getLogout');


    Route::group(['prefix'=>'category'], function(){

        Route::get('/', 'CategoryController@getCategory');

        Route::get('add', 'CategoryController@getAddCategory');

        Route::post('add', 'CategoryController@postCategory');

        Route::get('edit/{data}', 'CategoryController@getEditCategory');

        Route::post('edit/{data}', 'CategoryController@postEditCategory');

        Route::get('delete/{data}', 'CategoryController@getDeleteCategory');
        
    });

    Route::group(['prefix'=>'product'], function(){

        Route::get('/', 'ProductController@getProduct');

        Route::get('add', 'ProductController@getAddProduct');

        Route::post('add', 'ProductController@postProduct');

        Route::get('edit/{data}', 'ProductController@getEditProduct');

        Route::post('edit/{data}', 'ProductController@postEditProduct');

        Route::get('delete/{id}', 'ProductController@getDeleteProduct');
        
    });
});