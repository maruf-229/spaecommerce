<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//admin routes
Route::get('admin/login',[AdminLoginController::class,'showLoginForm'])->name('admin.login');
Route::post('admin/login',[AdminLoginController::class,'login'])->name('admin.login');
Route::post('admin/password/email',[AdminLoginController::class,'sendResetLinkEmail'])->name('admin.password.email');
Route::get('admin/password/reset',[AdminLoginController::class,'showLinkRequestForm'])->name('admin.password.request');
Route::post('admin/password/reset',[AdminLoginController::class,'reset']);
Route::get('admin/password/reset/{token}',[AdminLoginController::class,'showResetForm'])->name('admin.password.reset');
Route::get('/admin', [AdminController::class,'index'])->name('admin.dashboard'); //admin dashboard
Route::get('/admin/logout', [AdminController::class,'logout'])->name('admin.logout'); //admin logout

//category
Route::get('/categories', [CategoryController::class,'index'])->name('category');
Route::post('/store/category', [CategoryController::class,'store'])->name('store.category');

//subcategory
Route::get('/subcategory', [CategoryController::class,'subcategory'])->name('subcategory');
Route::post('/store/subcategory', [CategoryController::class,'storeSubcategory'])->name('store.subcategory');

//brands
Route::get('/brands', [CategoryController::class,'brands'])->name('brands');
Route::post('/store/brand', [CategoryController::class,'storeBrand'])->name('store.brand');

//json request
Route::get('/get/subcat/{id}',[ProductController::class,'getSubcat']);

//product
Route::get('/products',[ProductController::class,'products'])->name('products');
Route::get('/create/products',[ProductController::class,'createProducts'])->name('create.product');
Route::post('/store/products', [ProductController::class,'storeProducts'])->name('store.products');





