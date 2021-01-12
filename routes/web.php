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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => LaravelLocalization::setLocale(),	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){

Auth::routes();

});
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout',function(){
    Auth::logout();
    return redirect()->route('login');
  })->name('logout');
  

################ Admin ############### 

Route::group(['prefix' => LaravelLocalization::setLocale(),	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){
  Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
    //Dashboard
    route::get('dashboard','DashboardController@dashboard')->name('dashboard');
    
    //Users
    route::get('index_user','UserController@index')->name('index_user');
    route::get('create_user','UserController@create_user')->name('create_user');
    route::post('create_user_store','UserController@create_user_store')->name('create_user_store');
    route::get('update_user/{id}','UserController@update_user')->name('update_user');
    route::post('update_user_store/{id}','UserController@update_user_store')->name('update_user_store');
    route::get('delete_user/{id}','UserController@delete_user')->name('delete_user');
    route::get('profile_admin','UserController@profile_admin')->name('profile_admin');
    route::post('update_profile_admin/{id}','UserController@update_profile_admin')->name('update_profile_admin');

    //categoreis
    route::get('index_category','CategoryController@index_category')->name('index_category');
    route::get('create_category','CategoryController@create_category')->name('create_category');
    route::post('create_category_store','CategoryController@create_category_store')->name('create_category_store');
    route::get('update_category/{id}','CategoryController@update_category')->name('update_category');
    route::post('update_category_store/{id}','CategoryController@update_category_store')->name('update_category_store');
    route::get('delete_category/{id}','CategoryController@delete_category')->name('delete_category');

    //Detalis Category
    route::get('detalis_category','CategoryController@detalis_category')->name('detalis_category');
    route::get('create_detalis_category','CategoryController@create_detalis_category')->name('create_detalis_category');
    route::post('create_detalis_category_store','CategoryController@create_detalis_category_store')->name('create_detalis_category_store');
    route::get('update_detalis_category/{id}','CategoryController@update_details_category')->name('update_detalis_category');
    route::post('update_detalis_category_store/{id}','CategoryController@update_detalis_category_store')->name('update_detalis_category_store');
    route::get('delete_details_category/{id}','CategoryController@delete_details_category')->name('delete_details_category');

    //products
    route::get('index_product','ProductController@index_product')->name('index_product');
    route::get('create_product','ProductController@create_product')->name('create_product');
    route::post('create_product_store','ProductController@create_product_store')->name('create_product_store');
    route::get('update_product/{id}','ProductController@update_product')->name('update_product');
    route::post('update_product_store/{id}','ProductController@update_product_store')->name('update_product_store');
    route::get('delete_product/{id}','ProductController@delete_product')->name('delete_product');
    route::get('show_product/{slug}','ProductController@show_product')->name('show_product');
    route::get('approved/{id}','ProductController@approved')->name('approved');
    route::get('cansel_product/{id}','ProductController@cansel_product')->name('cansel_product');
    route::get('featured/{id}','ProductController@featured')->name('featured');
    route::get('not_featured/{id}','ProductController@not_featured')->name('not_featured');

    //colors
    route::get('index_color','ColorController@index_color')->name('index_color');
    route::get('create_color','ColorController@create_color')->name('create_color');
    route::post('create_color_store','ColorController@create_color_store')->name('create_color_store');
    route::get('update_color/{id}','ColorController@update_color')->name('update_color');
    route::post('update_color_store/{id}','ColorController@update_color_store')->name('update_color_store');
    route::get('delete_color/{id}','ColorController@delete_color')->name('delete_color');

    //sizes
    route::get('index_size','SizeController@index_size')->name('index_size');
    route::get('create_size','SizeController@create_size')->name('create_size');
    route::post('create_size_store','SizeController@create_size_store')->name('create_size_store');
    route::get('update_size/{id}','SizeController@update_size')->name('update_size');
    route::post('update_size_store/{id}','SizeController@update_size_store')->name('update_size_store');
    route::get('delete_size/{id}','SizeController@delete_size')->name('delete_size');

    //Brands
    route::get('index_brand','BrandController@index_brand')->name('index_brand');
    route::get('create_brand','BrandController@create_brand')->name('create_brand');
    route::post('create_brand_store','BrandController@create_brand_store')->name('create_brand_store');
    route::get('update_brand/{id}','BrandController@update_brand')->name('update_brand');
    route::post('update_brand_store/{id}','BrandController@update_brand_store')->name('update_brand_store');
    route::get('delete_brand/{id}','BrandController@delete_brand')->name('delete_brand');

        
    //complaints
    route::get('index_complaints','ComplaintController@index_complaints')->name('index_complaints');
    route::get('show_complaints/{id}','ComplaintController@show_complaints')->name('show_complaints');
    route::get('delete_complaints/{id}','ComplaintController@delete_complaints')->name('delete_complaints');

    //comments
    route::get('index_comments','CommentController@index_comments')->name('index_comments');
    route::get('show_comments/{id}','CommentController@show_comments')->name('show_comments');
    route::get('delete_comments/{id}','CommentController@delete_comments')->name('delete_comments');

    //ratings
    route::get('index_ratings','RatingController@index_ratings')->name('index_ratings');
    route::get('delete_ratings/{id}','RatingController@delete_ratings')->name('delete_ratings');

    //orders
    route::get('index_orders','OrderController@index_orders')->name('index_orders');
    route::get('show_orders/{id}','OrderController@show_orders')->name('show_orders');
    route::get('delete_order/{id}','OrderController@delete_order')->name('delete_order');
    route::get('cansel_order/{id}','OrderController@cansel_order')->name('cansel_order');
    route::get('done_order/{id}','OrderController@done_order')->name('done_order');
    route::get('waite_order/{id}','OrderController@waite_order')->name('waite_order');

  });
});






################# user #################

Route::group(['prefix' => LaravelLocalization::setLocale(),	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){
  Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>['auth']],function(){
    
    //users
    route::get('update_profile/{id}','UserController@update_profile')->name('update_profile');
    route::post('settings/{id}','UserController@settings')->name('settings');


    Route::group(['middleware'=>['vendor']],function(){

    //vendor
    route::get('dashboard_vendor','DashboardController@dashboard_vendor')->name('dashboard_vendor');
    route::get('create_product_vendor','DashboardController@create_product_vendor')->name('create_product_vendor');
    route::post('create_product_store_vendor','DashboardController@create_product_store_vendor')->name('create_product_store_vendor');
    route::get('update_product_vendor/{id}','DashboardController@update_product_vendor')->name('update_product_vendor');
    route::post('update_product_vendor_store/{id}','DashboardController@update_product_vendor_store')->name('update_product_vendor_store');
    route::get('delete_product_vendor/{id}','DashboardController@delete_product_vendor')->name('delete_product_vendor');
    route::get('show_product_vendor/{slug}','DashboardController@show_product_vendor')->name('show_product_vendor');
    route::get('waite_product_list','DashboardController@waite_product_list')->name('waite_product_list');
   
    //order vendor
    route::get('index_orders_vendor','OrderController@index_orders_vendor')->name('index_orders_vendor');
    route::get('show_orders_vendor/{id}','OrderController@show_orders_vendor')->name('show_orders_vendor');
    route::get('delete_orders/{id}','OrderController@delete_orders')->name('delete_orders');
    route::get('cansel/{id}','OrderController@cansel')->name('cansel');
    route::get('done/{id}','OrderController@done')->name('done');
    route::get('waite/{id}','OrderController@waite')->name('waite');
    
  });

    //index
    route::get('index','IndexController@index')->name('index');
    route::get('details_prodcut/{slug}','IndexController@details_prodcut')->name('details_prodcut');
    route::get('all_products','IndexController@all_products')->name('all_products');

    //category
    route::get('category/{id}','CategoryController@category')->name('category');
    route::get('low_price/{id}','CategoryController@low_price')->name('low_price');
    route::get('high_price/{id}','CategoryController@high_price')->name('high_price');
    route::get('brands/{id}','CategoryController@brands')->name('brands');

    //carts
    route::get('index_cart','ShoppingController@index_cart')->name('index_cart');
    route::post('add_cart','ShoppingController@add_cart')->name('add_cart');


    //contact_us
    route::get('contact_us','Contact_usController@contact_us')->name('contact_us');
    route::post('contact_us_store','Contact_usController@contact_us_store')->name('contact_us_store');

    //about 
    route::get('about','AboutController@about')->name('about');

  });
});

