<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ForgotController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




//login route
Route::post('/login',[AuthController::class,"login"]);

//register route
Route::post('/register',[AuthController::class,"register"]);

//forgot password route
Route::post('/forgot-password',[ForgotController::class,"forgotPassword"]);

//reset password route
Route::post('/reset-password',[ForgotController::class,"resetPassword"]);

//current user
Route::get('/user',[UserController::class,"user"])->middleware('auth:api');

//categories
Route::get('/categorieses',[CategoryController::class,"categories"]);

//sub_category
Route::get('/subcategorieses',[CategoryController::class,"subcategories"]);

//deal of the day
Route::get('/dealsoftheday',[ProductController::class,"dealsOfTheDay"]);
//buy1 get1
Route::get('/buyonegetones',[ProductController::class,"buyOneGetOne"]);
//recent product
Route::get('/recentproducts',[ProductController::class,"recentProduct"]);

//single products
Route::get('/singleproducts/{id}',[ProductController::class,"singleProducts"]);

//wish list
Route::get('/addwishlists/{id}',[ProductController::class,"addWishList"])->middleware('auth:api');

//cart routes
Route::get('/cartproducts',[CartController::class,"cartProducts"])->middleware('auth:api');
Route::post('/addcarts/{id}',[CartController::class,"addToCart"])->middleware('auth:api');
Route::get('/removeitem/{id}',[CartController::class,"itemRemove"])->middleware('auth:api');
Route::get('/cartflash',[CartController::class,"cartFlash"])->middleware('auth:api');

//order routes checkout routes
Route::get('/mycarts',[OrderController::class,"myCart"])->middleware('auth:api');


