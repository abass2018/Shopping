<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Order_ItemsController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/dashboard', 'Admin\FrontendController@index');

    Route::get('categories','Admin\CategoryController@index');
    Route::get('add-category','Admin\CategoryController@add');
    Route::post('insert-category','Admin\CategoryController@insert');
    Route::get('edit-prod/{id}', [CategoryController::class,'edit']);
    Route::PUT('update-category/{id}' , [CategoryController::class,'update']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroy']);
//end category page Route

//product page Route
 Route::get('products',[ProductController::class, 'index']);
 Route::get('add-products',[ProductController::class, 'add']);
 Route::post('insert-product',[ProductController::class, 'insert']);
 Route::get('edit-product/{id}',[ProductController::class, 'edit']);
 Route::PUT('update-product/{id}',[ProductController::class, 'update']);
 Route::get('delete-product/{id}',[ProductController::class, 'destroy']);

 //end product page Route

//order_items page Route
Route::get('order_item',[Order_ItemsController::class, 'index']);
Route::get('add-order-item',[Order_ItemsController::class, 'add']);
Route::post('insert-order-item',[Order_ItemsController::class, 'insert']);
Route::get('edit-order-item/{id}',[Order_ItemsController::class, 'edit']);
Route::PUT('update-order-item/{id}',[Order_ItemsController::class, 'update']);
Route::get('delete-order-item/{id}',[Order_ItemsController::class, 'destroy']);

//end order_items page Route



});
