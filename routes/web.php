<?php

use App\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Admin\ModalController;


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

Route::get('/home', 'HomeController@index')->name('home');


//category route
Route::get('/dashboard', 'admin\DashboardController@index');
Route::get('categories','admin\CategoryController@index');
Route::get('add-Category','admin\CategoryController@add');
Route::post('insert-category','admin\CategoryController@insert');
Route::get('edit-category/{id}', [CategoryController::class ,'edit']);
Route::put('update-category/{id}' ,[CategoryController::class ,'update']);
Route::get('delete-category/{id}',[CategoryController:: class ,'delete']);

//product route
Route::get('products',[ProductController::class ,'index']);
Route::get('add-products',[ProductController::class ,'add']);
Route::post('insert-product' , [ProductController::class , 'insert']);
Route::get('edit-product/{id}' , [ProductController::class ,'edit' ]);
Route::put('update-product/{id}' , [ProductController::class ,'update']);
Route::get('delete-product/{id}' , [ProductController::class , 'delete']);

//product variant route
Route::get('variants', [VariantController::class , 'index']);
Route::get('add-variants',[VariantController::class ,'add']);
Route::post('insert-variant' , [VariantController::class , 'insert']);
Route::get('edit-variant/{id}' , [VariantController::class ,'edit']);
Route::put('update-variant/{id}' , [VariantController::class ,'update']);
Route::get('delete-variant/{id}' , [VariantController::class , 'delete']);

// pop up modal route
Route::get('view-category/{id}', [ModalController::class , 'view']);
Route::get('view-variant/{id}', [ModalController::class , 'view_variant']);


