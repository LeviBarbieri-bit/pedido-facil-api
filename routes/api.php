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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::prefix('/admin/companies')->group(function () {
    Route::get('/list', 'Api\Admin\CompaniesController@index');
    Route::get('/{id}', 'Api\Admin\CompaniesController@index');
    Route::post('/add', 'Api\Admin\CompaniesController@store');
    Route::post('/update', 'Api\Admin\CompaniesController@update');
    Route::post('/delete', 'Api\Admin\CompaniesController@destroy');
});

/*Route::prefix('products')->group(function () {

    Route::get('/list', 'Api\ProductsController@index');
    Route::post('/add', 'Api\ProductsController@store');
    Route::post('/update', 'Api\ProductsController@update');
    Route::post('/delete', 'Api\ProductsController@destroy');

});*/
//Route::get('products', 'Api\ProductsController@index');
