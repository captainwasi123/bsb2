<?php

use Illuminate\Support\Facades\Route;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;

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


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


//Website
    Route::namespace('web')->group(function(){

        Route::get('/', 'webController@index')->name('web.index');
        Route::get('about', 'webController@about')->name('web.about');
        Route::get('categories', 'webController@categories')->name('web.categories');
        Route::get('category/{id}/{name}', 'webController@category')->name('web.category');
        Route::get('/product/fav/{id}', 'webController@favprod');
        Route::get('/vendr/fav/{id}', 'webController@favVender');

        Route::get('physicalBox', 'webController@physicalBox')->name('web.physical_box');


        Route::get('login', 'webController@login')->name('web.login');
        Route::get('logout', 'webController@logout')->name('web.logout');
        Route::get('register', 'webController@register')->name('web.register');

        Route::post('login', 'webController@loginSubmit');
        Route::post('register', 'webController@registerSubmit');

        // forget password

        Route::get('forget-password', 'webController@showForgetPasswordForm')->name('forget.password.get');
        Route::post('forget-password', 'webController@submitForgetPasswordForm')->name('forget.password.post');
        Route::get('reset-password/{token}', 'webController@showResetPasswordForm')->name('reset.password.get');
        Route::post('reset-password', 'webController@submitResetPasswordForm')->name('reset.password.post');


    });


//User Dashboard
    Route::prefix('user')->namespace('user')->middleware('userAuth')->group(function(){

        Route::get('/', 'userController@index')->name('user.dashboard');

        Route::get('/membership/plan', 'userController@memberPlan')->name('user.membership.memberPlan');
        Route::post('/membership/buyMU', 'userController@buyMembershipUser')->name('user.membership.buyPlan');
        Route::get('/membership/status', 'userController@memberStatus')->name('user.membership.memberStatus');

        Route::get('/whishlist/product', 'userController@whishlistProduct')->name('user.whishlist.whishlistProduct');
        Route::get('/deleted/{id}', 'userController@deleteWishlistProduct');

        Route::get('/whishlist/vendors', 'userController@whishlistVendors')->name('user.whishlist.whishlistVendors');
        Route::get('delete/{id}', 'userController@deletewhishlistVendors');


        Route::get('/setting/profile', 'userController@settingProfile')->name('user.setting.settingProfile');
        Route::post('/setting/profile', 'userController@settingProfileSubmit');
        Route::get('/setting/password', 'userController@settingPassword')->name('user.setting.settingPassword');
        Route::post('/setting/password', 'userController@settingPasswordSubmit');
        Route::post('become_a_vendor', 'userController@becomeVendor')->name('user.become_a_vendor');



        Route::post('paypal', array('as' => 'user.paypal','uses' => 'paypalController@postPaymentWithpaypal',));
        Route::get('paypal', array('as' => 'user.status','uses' => 'paypalController@getPaymentStatus',));

    });

//User Dashboard
    Route::prefix('vendr')->namespace('vendor')->middleware('vendorAuth')->group(function(){


        Route::get('/', 'vendorController@index')->name('vendor.index');


        Route::post('paypal', array('as' => 'vendor.paypal','uses' => 'paypalController@postPaymentWithpaypal',));
        Route::get('paypal', array('as' => 'vendor.status','uses' => 'paypalController@getPaymentStatus',));

        //Profile
            Route::prefix('profile')->group(function(){

                Route::get('basicInformation', 'vendorController@basicInfo')->name('vendor.profile.basicInfo');
                Route::post('basicInformation', 'vendorController@basicInfoSubmit');

                Route::get('security', 'vendorController@passSecurity')->name('vendor.profile.passSecurity');
                Route::post('security', 'vendorController@passSecuritySubmit');
            });

        //Products
            Route::prefix('product')->group(function(){

                Route::get('add', 'productController@addNewProduct')->name('vendor.product.addNewProduct');
                Route::post('add', 'productController@addNewProductSubmit');

                Route::get('all', 'productController@allProduct')->name('vendor.product.allProduct');
                Route::get('pending', 'productController@pendingProduct')->name('vendor.product.pendingProduct');
                Route::get('approve', 'productController@approveProduct')->name('vendor.product.approveProduct');
                Route::get('reject', 'productController@rejectProduct')->name('vendor.product.rejectProduct');

                Route::get('delete/{id}', 'productController@deleteProduct');
                Route::get('edit/{id}', 'productController@editProduct')->name('vendor.product.edit');
                Route::post('update', 'productController@updateProduct')->name('vendor.product.update');



                // product feature
                Route::get('FeaturProPending', 'productController@FeaturProPending')->name('vendor.product.FeaturProPending');
                Route::get('FeatureProApprove', 'productController@FeatureProApprove')->name('vendor.product.FeatureProApprove');
                Route::get('FeatureProReject', 'productController@FeatureProReject')->name('vendor.product.FeatureProReject');


                // Pro pendig status
                Route::get('featureStatusPend/{id}/{status}', 'productController@featureprodStatus')->name('vendor.product.changeStatus');
                Route::get('unfeaturePro/{id}/{status}', 'productController@unfeaturePro')->name('vendor.product.unfeaturePro');

            });

        Route::get('/virtual/plan', 'vendorController@memberPlan')->name('vendor.virtual.memberPlan');
        Route::get('/virtual/buyMV/{id}', 'vendorController@buyMembershipVonder');
        Route::get('/virtual/status', 'vendorController@memberStatus')->name('vendor.virtual.memberStatus');
        Route::get('cancelmembership/{id}/{status}', 'vendorController@cancelmembership')->name('vendor.virtual.cancelmembership');

    });



//Admin Dashboard
    Route::prefix('panel')->namespace('admin')->group(function(){

        Route::get('/', 'authController@index')->name('admin.dashboard');
        Route::get('/login', 'authController@login')->name('admin.login');
        Route::post('/login', 'authController@loginSubmit');
        Route::get('/logout', 'authController@logout')->name('admin.logout');

        Route::middleware('adminAuth')->group(function(){

            Route::get('/dashboard', 'adminController@index')->name('admin.index');

            Route::prefix('vendor')->group(function(){
                Route::get('new', 'adminController@vendorNew')->name('admin.vendor.vendorNew');
                Route::get('featured', 'adminController@vendorFeatured')->name('admin.vendor.vendorFeatured');
                Route::get('active', 'adminController@vendorActive')->name('admin.vendor.vendorActive');
                Route::get('blocked', 'adminController@vendorBlocked')->name('admin.vendor.vendorBlocked');

                Route::get('changeStatus/{id}/{status}', 'adminController@changeStatus')->name('admin.vendor.changeStatus');

                Route::get('featureStatus/{id}/{status}', 'adminController@featureStatus')->name('admin.vendor.featureStatus');

                Route::get('publish/{id}', 'adminController@publishVendor');


            });

            Route::prefix('users')->group(function(){

                Route::get('all', 'userController@usersAll')->name('admin.users.usersAll');
                Route::get('blocked', 'userController@usersBlocked')->name('admin.users.usersBlocked');
                Route::get('premium', 'userController@usersPremium')->name('admin.users.usersPremium');

                Route::get('changeStatus/{id}/{status}', 'userController@changeStatus')->name('admin.users.changeStatus');
            });

            Route::prefix('product')->group(function(){

                Route::get('pending', 'productController@productPending')->name('admin.featured_product.productPending');
                Route::get('publish', 'productController@productPublish')->name('admin.featured_product.productPublish');
                Route::get('expired', 'productController@productExpired')->name('admin.featured_product.productExpired');
                Route::get('blocked', 'productController@productBlocked')->name('admin.featured_product.productBlocked');

                Route::get('changeStatus/{id}/{status}', 'productController@changeStatus')->name('admin.users.changeStatus');

                // feature
                Route::get('featproductPending', 'productController@featproductPending')->name('admin.featured_product.featproductPending');
                Route::get('featproductApprove', 'productController@featproductApprove')->name('admin.featured_product.featproductApprove');
                Route::get('changeFeatureStatus/{id}/{status}', 'productController@changeFeatureStatus')->name('admin.users.changeFeatureStatus');
                Route::get('cancelFeaPro/{id}/{status}', 'productController@cancelFeaPro')->name('admin.users.cancelFeaPro');
                Route::get('rejectFeaPro/{id}/{status}', 'productController@rejectFeaPro')->name('admin.users.rejectFeaPro');




            });

            Route::get('/setting/role', 'adminController@settingRole')->name('admin.setting.settingRole');

            Route::get('/member/pending', 'adminController@memberPending')->name('admin.featured_member.memberPending');
            Route::get('/member/publish', 'adminController@memberPublish')->name('admin.featured_member.memberPublish');
            Route::get('/member/expired', 'adminController@memberExpired')->name('admin.featured_member.memberExpired');
            Route::get('/member/sendMail', 'adminController@memberSendMail')->name('admin.featured_member.memberSendMail');
            Route::get('/member/blocked', 'adminController@memberBlocked')->name('admin.featured_member.memberBlocked');
            Route::get('/member/cancel', 'adminController@memberCancel')->name('admin.featured_member.memberCancel');
        });

    });

