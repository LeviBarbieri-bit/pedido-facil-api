<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'Api\PassportAuthController@register');
Route::post('login', 'Api\PassportAuthController@login');

Route::middleware('auth:api')->group(function () {
    Route::prefix('/admin/companies')->group(function () {
        Route::get('/list', 'Api\Admin\CompaniesController@index');
        Route::get('/{id}', 'Api\Admin\CompaniesController@index');
        Route::post('/add', 'Api\Admin\CompaniesController@store');
        Route::post('/update', 'Api\Admin\CompaniesController@update');
        Route::post('/delete', 'Api\Admin\CompaniesController@destroy');
    });

    Route::prefix('/company/products')->group(function () {
        Route::get('/list', 'Api\Company\ProductsController@index');
        Route::get('/{id}', 'Api\Company\ProductsController@index');
        Route::post('/add', 'Api\Company\ProductsController@store');
        Route::post('/update', 'Api\Company\ProductsController@update');
        Route::post('/delete', 'Api\Company\ProductsController@destroy');
    });

});