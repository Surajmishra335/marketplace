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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//category
Route::get('/category', 'Api\ApiCategoryController@getCategory');
Route::get('/subcategory', 'Api\ApiCategoryController@getSubCategory');
Route::get('/childcategory', 'Api\ApiCategoryController@getChildCategory');


//address
Route::get('/country', 'Api\AddressController@getCountry');
Route::get('/state', 'Api\AddressController@getState');
Route::get('/city', 'Api\AddressController@getCity');
