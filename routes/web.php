<?php

use App\Helpers\ActivityLogger;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/clearCache', function () {
    Artisan::call('config:cache');
    dd("Config clear..! OK");
});

Route::get('/optimizeClear', function () {
    Artisan::call('optimize:clear');
    dd("Optimize clear..! OK");
});
Route::get('/storageLink', function () {
    $exitCode = Artisan::call('storage:link');
        if ($exitCode === 0) {
            echo "Storage link created successfully.";
        } else {
            echo "Error: Storage link creation failed with exit code $exitCode";
        }
});

$controller_path = 'App\Http\Controllers';

//login
Route::get('admin', $controller_path . '\admin\LoginController@login')->name('login');
Route::post('/admin/login-details', $controller_path . '\admin\LoginController@login_details')->name('admin.login');

//forgot password
Route::get('/admin/forgot_password', $controller_path . '\admin\LoginController@forgot_password')->name('forgot-password');
Route::post('/admin/forgotpass', $controller_path . '\admin\LoginController@sendResetLinkEmail')->name('forgotpass');
Route::get('/admin/reset_password/{token}', $controller_path . '\admin\LoginController@reset_password')->name('reset-password');
Route::post('/admin/resetpass', $controller_path . '\admin\LoginController@reset')->name('resetpass');

//middleware
Route::group(['middleware' => 'admin_auth'], function(){

    $controller_path = 'App\Http\Controllers';

    // Main Page Route
    Route::get('/dashboard', $controller_path . '\dashboard\DashboardController@index')->name('dashboard');

    //change password
    Route::get('admin/changepassword', $controller_path . '\admin\LoginController@changepassword');
    Route::post('admin/changepassword',  $controller_path . '\admin\LoginController@storeChangepassword')->name('change.password');

    //logout
    Route::get('logout', function(){
        session()->forget('ADMIN_LOGIN');
        session()->forget('UserDetails');
        session()->flash('error','Logout success');
        return redirect('admin');
    })->name('logout');

    //category routes - moved inside admin middleware
    Route::get('/category', $controller_path . '\category\CategoryController@index_category')->name('category');
    Route::get('/category_add',  $controller_path . '\category\CategoryController@index_addcategory')->name('category-add');
    Route::post('/category_list',  $controller_path . '\category\CategoryController@index_listcategory')->name('category-list');
    Route::post('/category_insert/{id?}', $controller_path . '\category\CategoryController@store_category')->name('category-insert');
    Route::get('/category_edit/{id}', $controller_path . '\category\CategoryController@edit_category')->name('category-edit');
    Route::get('/category_delete/{id}', $controller_path . '\category\CategoryController@delete_category')->name('category-delete');
    Route::get('/status_category/{id}/{status}', $controller_path . '\category\CategoryController@status_category')->name('status-category');
    
    //product routes
    Route::get('/products', $controller_path . '\product\addproductController@index_product')->name('products');
    Route::get('/product_add',  $controller_path . '\product\addproductController@index_addproduct')->name('product-add');
    Route::post('/product_list',  $controller_path . '\product\addproductController@index_listproduct')->name('product-list');
    Route::post('/product_insert/{id?}', $controller_path . '\product\addproductController@store_product')->name('product-insert');
    Route::get('/product_edit/{id}', $controller_path . '\product\addproductController@edit_product')->name('product-edit');
    Route::get('/product_delete/{id}', $controller_path . '\product\addproductController@delete_product')->name('product-delete');
    Route::get('/status_product/{id}/{status}', $controller_path . '\product\addproductController@status_product')->name('status-product');
    
    //banner routes
    // Route::get('/banner', $controller_path . '\banner\bannerController@index_banner')->name('banner');
    // Route::get('/banner_add',  $controller_path . '\banner\bannerController@index_addbanner')->name('banner-add');
    // Route::post('/banner_list',  $controller_path . '\banner\bannerController@index_listbanner')->name('banner-list');
    // Route::post('/banner_insert/{id?}', $controller_path . '\banner\bannerController@store_banner')->name('banner-insert');
    // Route::get('/banner_edit/{id}', $controller_path . '\banner\bannerController@edit_banner')->name('banner-edit');
    // Route::get('/banner_delete/{id}', $controller_path . '\banner\bannerController@delete_banner')->name('banner-delete');
    // Route::get('/status_banner/{id}/{status}', $controller_path . '\banner\bannerController@status_banner')->name('status-banner');

    //contact us form routes
    Route::get('/contactshow',$controller_path.'\contactshow\contactshowController@index_contactshow')->name('contactshow');
    Route::post('/contactshow_list',  $controller_path . '\contactshow\contactshowController@index_listcontactshow')->name('contactshow-list');
    Route::get('/view_contactshow/{id}', $controller_path . '\contactshow\contactshowController@view_contactshow')->name('view-contactshow');
    Route::post('/contactus_form',  $controller_path . '\frontend\contactuscontroller@store_contactus')->name('contactus-form');

});

//Route::get('/',  $controller_path . '\web\pages\HomePageController@index')->name('web.home');

Route::group(['middleware' => ['auth:registration']], function() {
    $controller_path = 'App\Http\Controllers';
    // Route::get('/web-logout', $controller_path . '\web\pages\LoginController@logout')->name('web.logout');
});

//frontend routes 
Route::get('/',  $controller_path . '\frontend\homecontroller@index')->name('fronted.home');
Route::get('/about',  $controller_path . '\frontend\aboutcontroller@index')->name('fronted.about');
Route::get('/contactus',  $controller_path . '\frontend\contactuscontroller@index')->name('fronted.contacus');
Route::get('/product/{slug}',  $controller_path . '\frontend\productcontroller@index')->name('fronted.product');
Route::get('/viewproduct/{slug}',  $controller_path . '\frontend\viewproductcontroller@index')->name('fronted.viewproduct');

