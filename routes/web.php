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
    return view('welcome');
});

Auth::routes();
//Route::get('/productop',function (){
//    return view('Product.productop');
//});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/product','ProductController');
Route::resource('/productop','operationController');
Route::post('/record','ProductController@record');
Route::delete('/delete','ProductController@destroy');
Route::get('/product-list', function () {

    return App\Models\Product::latest()->get();
});
Route::get('/request-list',function (){
    return App\Models\Pivot\operation_product::latest()->get();
});
Route::get('/user-auth', function () {
    return Auth::user()->id;
});
