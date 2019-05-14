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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

// Products
Route::get('/san-pham.html', 'HomeController@template')->name('catalog.product');
Route::get('/{slug}-c{id}.html', 'HomeController@category')
    ->where([
        'slug' => '[a-z0-9-]+',
        'id' => '[0-9]+',
    ])->name('category.product');

Route::get('/{slug}-p{id}.html', 'HomeController@detail')->where([
    'slug' => '[a-z0-9-]+',
    'id' => '[0-9]+',
])->name('product.detail');


Route::get('/ajax/search','AjaxController@search')->name('search');

Route::get('/contact-us.html','HomeController@contact')->name('company.contact');
Route::post('/contact-us.html','HomeController@contactSave')->name('company.contact.post');


// Page
Route::get('/{slug}-t{id}.html', 'HomeController@pageDetail')->where([
    'slug' => '[a-z0-9-]+',
    'id' => '[0-9]+',
])->name('page.detail');


// Blog category
Route::get('/{slug}-bc{id}.html', 'HomeController@blogCategory')
    ->where([
        'slug' => '[a-z0-9-]+',
        'id' => '[0-9]+',
    ])
    ->name('blog.category');

// Blog detail
Route::get('/{slug}-b{blog_id}.html', 'HomeController@blogDetail')
    ->where([
        'slug' => '[a-z0-9-]+',
        'blog_id' => '[0-9]+',
    ])
    ->name('blog.detail');

 /**
 * Ajax
*/
Route::group([
    'prefix' => 'ajax',
], function() {
    Route::get('district', 'AjaxController@district')->name('ajax.district');

    Route::get('cart', 'CartController@ajaxCart')->name('ajax.cart');
    Route::delete('cart', 'CartController@removeItemCart')->name('ajax.delete.cart');
    Route::get('get_reviews', 'ReviewController@reviews')->name('ajax.reviews');

    Route::post('favorite', 'CustomerController@addFavorite')->name('ajax.favorite')->middleware('auth');

});



// Customer routes

Route::post('product/addcart', 'CartController@addcart')->name('product.addcart');
Route::post('purchase-now', 'CartController@purchaseNow')->name('purchase');
Route::get('gio-hang.html', 'CartController@viewcart')->name('cart.view');
Route::post('gio-hang.html', 'CartController@updatecart')->name('cart.update');
Route::get('thanh-toan.html', 'CartController@checkout')->name('cart.checkout');
Route::post('thanh-toan.html', 'CartController@checkoutSave')->name('cart.checkout.save');
Route::get('thanh-toan/{order_id}/thanh-cong.html', 'CartController@checkoutSuccess')->name('cart.checkout.success');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'account'
], function() {
    Route::get('dashboard.html', 'CustomerController@dashboard')->name('customer.dashboard');

    Route::get('so-dia-chi.html', 'CustomerController@address')->name('customer.address');
    Route::post('so-dia-chi.html', 'CustomerController@addressSave')->name('customer.address.save');
    Route::get('so-dia-chi/{id}/sua.html', 'CustomerController@editAddress')->name('customer.address.edit');
    Route::post('so-dia-chi/{id}/sua.html', 'CustomerController@updateAddress')->name('customer.address.update');
    Route::delete('so-dia-chi/{id}/xoa.html', 'CustomerController@deleteAddress')->name('customer.address.delete');

    Route::get('doi-mat-khau.html', 'CustomerController@password')->name('customer.password');
    Route::post('doi-mat-khau.html', 'CustomerController@passwordSave')->name('customer.password.save');

    Route::get('don-hang.html', 'CustomerController@orders')->name('customer.order');
    Route::get('don-hang/{order_id}/chi-tiet.html', 'CustomerController@orderDetail')->name('customer.order.detail');

    Route::get('ho-so-ca-nhan.html', 'CustomerController@profile')->name('customer.profile');
    Route::post('ho-so-ca-nhan.html', 'CustomerController@profileSave')->name('customer.profile.save');

    Route::post('gui-danh-gia.html', 'ReviewController@review')->name('customer.review');


});


// Admin routes
Route::group([
    'prefix' => 'administration'
], function(){

    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login.submit');

    Route::group([
        'middleware' => 'auth:admin'
    ], function(){

        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
        Route::get('/api/report','Admin\AdminController@report')->name('admin.report');
        Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');




        // Product
        Route::group([
            'prefix' => 'systems',
        ], function(){
            Route::resource('continent','Admin\ContinentController');
            Route::resource('country','Admin\CountryController');
            Route::resource('city','Admin\CityController');
            Route::resource('district','Admin\DistrictController');
            Route::resource('ward','Admin\WardController');

            Route::resource('client','Admin\ClientController');
            Route::post('client/remove','Admin\ClientController@remove')->name('client.remove');

            Route::resource('store','Admin\StoreController');
            Route::post('store/remove','Admin\StoreController@remove')->name('store.remove');

        });

        Route::resource('order','Admin\OrderController');
        Route::post('order-change-status','Admin\OrderController@changeStatus')->name('order.change_status');

        Route::resource('contact','Admin\ContactController');

        Route::resource('page','Admin\PageController');
        Route::post('page/remove','Admin\PageController@remove')->name('page.remove');

        // Product
        Route::group([
            'prefix' => 'product',
        ], function(){
            Route::resource('categories','Admin\CategoryController');

            Route::post('categories-ordering','Admin\CategoryController@ordering')->name('ajax.category.ordering');
            Route::resource('product','Admin\ProductController');
            Route::post('product/remove','Admin\ProductController@remove')->name('product.remove');

            Route::resource('brand','Admin\BrandController');
            Route::resource('attribute','Admin\AttributeController');
            Route::resource('type','Admin\ProductTypeController');

        });

        // User
        Route::group([
            'prefix' => 'users',
        ], function(){
            Route::resource('user', 'Admin\UserController');
            Route::resource('user_group', 'Admin\UserGroupController');

        });

        // Blog
        Route::group([
            'prefix' => 'blog',
        ], function(){
            Route::resource('blog','Admin\BlogController');
            Route::post('blog/remove','Admin\BlogController@remove')->name('blog.remove');
            Route::resource('blog-category','Admin\BlogCategoryController');
        });

        // Modules
        Route::group([
            'prefix' => 'module',
        ], function(){
            Route::resource('block','Admin\BlockController');
            Route::post('block/remove','Admin\BlockController@remove')->name('block.remove');

            Route::resource('slider','Admin\SliderController');
            Route::post('slider/remove','Admin\SliderController@remove')->name('slider.remove');

            Route::resource('menu','Admin\MenuController');
            Route::resource('menu_item','Admin\MenuItemController');
            Route::post('menu-ordering','Admin\MenuController@ordering')->name('ajax.menu.ordering');

        });
        // System
        Route::group([
            'prefix' => 'system',
        ], function(){


            Route::get('/sys_user/change-password',array('as'=>'admin_user.change_password',
                'uses' => 'Admin\SysUserController@change_password'));
            Route::post('/sys_user/change-password',array('as'=>'admin_user.change_password.save',
                'uses' => 'Admin\SysUserController@save_change_password'));
            // Configuration
            Route::resource('configuration','Admin\ConfigurationController');

            Route::resource('email-template','Admin\EmailTemplateController');

            Route::resource('sys_user','Admin\SysUserController');

            Route::resource('role','Admin\RoleController');
            Route::resource('permission','Admin\PermissionController');
            //Route::resource('permission/sync','Admin\PermissionController@sync')->name('permission.sync');
        });


        Route::group(['prefix' => 'file-manager'], function () {
            UniSharp\LaravelFilemanager\Lfm::routes();
        });
        Route::get('/plush-cache', 'Admin\AdminController@flushCache')->name('flush.cache');
        // SEO Tools
        Route::get('/seo/generate-sitemap', 'Admin\AdminController@generateSitemap')->name('generate.sitemap');
    });

});




