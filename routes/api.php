<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Main Controller and returns 
 * Get Products from section id 
 * Get Products from Categories
 */

 // @return index objects
 Route::get('main/index','Api\MainController@index');
 Route::get('products/getFromSectionId/{id}','Api\ProductController@getFromSectionId');
 Route::get('products/getFromSubCategoryId/{id}','Api\ProductController@getFromSubCategoryId');
 Route::get('products/getFromCategoryId/{id}','Api\ProductController@getFromCategoryId');
 Route::post('products/search','Api\ProductController@SearchProducts');
Route::post('main/AppleCategoryFilter','Api\MainController@AppleCategoryFilter');

 /** Auth Controller 
  * Login
  * Register
  */

  Route::post('auth/login','Api\AuthController@login');
  Route::post('auth/register','Api\AuthController@register');
  Route::post('auth/update_profile','Api\AuthController@update_profile');
  Route::get('auth/get_user/{id}','Api\AuthController@get_user');

  /** Order Controller  */
  Route::post('order/store','Api\OrderController@store_new_order');

/** Coupons Route */
Route::post('coupon/check','Api\CouponController@check_coupon');
Route::post('coupon/register_used_coupon_to_user','Api\CouponController@register_used_coupon_to_user');

  Route::get('test_user','Api\AuthController@user_test');


/** Traffic */
Route::get('traffic/store','Api\MainController@store_traffic');




/** Admin Panel For Application */

// Categories Controller 
Route::get('admin/categories/index','Api\Admin\CategoriesController@index');

// SubCategories 
Route::get('admin/sub_categories/index','Api\Admin\SubCategories@index');

//Sections 
Route::get('admin/sections/index','Api\Admin\SectionController@index');

// Products
Route::get('admin/products/index','Api\Admin\ProductsController@index');

//Sliders
Route::get('admin/sliders/index','Api\Admin\SlidersController@index');

//Orders 
Route::get('admin/orders/index','Api\Admin\OrdersController@index');

// Coupons 
Route::get('admin/coupons/index','Api\Admin\CouponsController@index');

// Currency  
Route::get('admin/currencies/index','Api\Admin\CurrenciesController@index');

// Shipping  
Route::get('admin/shippings/index','Api\Admin\ShippingsController@index');