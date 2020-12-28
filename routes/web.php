<?php

use Illuminate\Support\Facades\Route;

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


/*
POST     | password/email          | password.email              | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web        |
|        | POST     | password/reset          | password.update             | App\Http\Controllers\Auth\ResetPasswordController@reset                | web        |
|        | GET|HEAD | password/reset          | password.request            | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web        |
|        | GET|HEAD | password/reset/{token}  | password.reset              | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web        |
|        | GET|HEAD | profile/index           | profile                     | App\Http\Controllers\ProfileController@index                           | web        |


 */


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile/index', 'ProfileController@index')->name('profile');
    Route::post('/profile/update/', 'ProfileController@update')->name('profile.update');

    //TODO this is temporary solution for the test admin page and ability
    // need change after review
    Route::get('/admin', 'AdminController@index')->name('admin-panel');





    Route::post('/cart/addToCart', 'CartController@addtocart');
    Route::post('/cart/deleteFromCart', 'CartController@deleteFromCart');

    Route::get('/checkoutPage', 'CheckoutController@checkoutIndex')->name('checkoutIndex');
    Route::post('/checkout', 'CheckoutController@checkoutOrder')->name('checkout');
});


Route::get('/', 'ListViewController@list_view')->name('home');

//Route::post('image/upload', 'ProductimageController@upload')->name('image.upload');
Route::post('create/service', 'AdminController@create_service')->name('create.service');
Route::post('create/category', 'CategoryController@create')->name('create.category');
Route::post('create/disable-button', 'AdminController@create_dis_button')->name('create_dis_button');



Route::get('list/view', 'ListViewController@list_view')->name('list.view');
Route::get('category/list/view/{id}', 'ListViewController@category_list_view')->name('category.list.view');
//order page
Route::get('order/page/{id}', 'OrderController@index')->name('order.page');

Route::get('cart/page', 'CartController@index')->name('cart.page');


