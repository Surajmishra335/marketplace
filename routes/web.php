<?php

use Doctrine\DBAL\Driver\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/home', function () {
    return view('home');
});



Route::get('/dashboard', 'DashboardController@index');

Route::get('/', 'FrontAdsController@index');

//admin

Route::group(['prefix' => 'auth', 'middleware' => 'admin'], function () {

    Route::get('/', function () {
        return view('backend/admin/index');
    });

    Route::resource('/category', 'CategoryController');
    Route::resource('/subcategory', 'SubcategoryController');
    Route::resource('/childcategory', 'ChildCategoryController');
});

//ads
Route::get('/ads/create', 'AdvertisementController@create')->middleware('auth')->name('ads.create');
Route::post('/ads/store', 'AdvertisementController@store')->middleware('auth')->name('ads.store');
Route::get('/ads', 'AdvertisementController@index')->name('ads.index')->middleware('auth');
Route::get('/ads/{id}/edit', 'AdvertisementController@edit')->name('ad.edit')->middleware('auth');
Route::put('/ads/{id}/update', 'AdvertisementController@update')->name('ad.update')->middleware('auth');
Route::delete('/ads/{id}/delete', 'AdvertisementController@destroy')->name('ad.delete')->middleware('auth');

//profile
Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
Route::post('/profile', 'ProfileController@updateProfile')->name('profile.update')->middleware('auth');

//User Profile seend by other users
Route::get('/ads/{userId}/view', 'FrontendController@viewuserAds')->name('show.user.ads');

//frontend
Route::get('/product/{categorySlug}', 'FrontendController@findBasedOnCategory')->name('category.show');
Route::get('/product/{categorySlug}/{subcategorySlug}', 'FrontendController@findBasedOnSubcategory')->name('subcategory.show');
Route::get('/product/{categorySlug}/{subcategorySlug}/{childcategorySlug}', 'FrontendController@findBasedOnChildcategory')->name('childcategory.show');

Route::get('/products/{id}/{slug}', 'FrontendController@show')->name('product.view');

//message
Route::post('/send/message','SendMessageController@store')->middleware('auth');
Route::get('/messages','SendMessageController@index')->middleware('auth');
Route::get('/users','SendMessageController@chatWithThisUser')->middleware('auth');
Route::get('/message/user/{id}','SendMessageController@showMessages')->middleware('auth');
Route::post('/start-conversation','SendMessageController@startConversation');


