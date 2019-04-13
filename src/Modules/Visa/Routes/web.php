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

Route::get('/apply-visa.html','VisaBookingController@applyVisaStep1')->name('apply.visa.step1');
Route::post('/apply-visa.html','VisaBookingController@applyVisaStep1Save')->name('apply.visa.step1.save');

Route::get('/apply-visa-step2.html','VisaBookingController@applyVisaStep2')->name('apply.visa.step2')->middleware('auth');
Route::post('/apply-visa-step2.html','VisaBookingController@applyVisaStep2Save')->name('apply.visa.step2.save')->middleware('auth');

Route::get('/apply-visa-step3.html','VisaBookingController@applyVisaStep3')->name('apply.visa.step3')->middleware('auth');
Route::post('/apply-visa-step3.html','VisaBookingController@applyVisaStep3Save')->name('apply.visa.step3.save')->middleware('auth');

Route::get('/apply-visa-step4.html','VisaBookingController@applyVisaStep4')->name('apply.visa.step4')->middleware('auth');
Route::post('/apply-visa-step4.html','VisaBookingController@applyVisaStep4Save')->name('apply.visa.step4.save')->middleware('auth');

Route::get('/get-cart','VisaBookingController@getCart')->name('apply.visa.get');
Route::post('/update-cart','VisaBookingController@applyVisaPost')->name('apply.visa.post');


Route::get('/visa-fees.html','HomeController@visaFee')->name('fee.visa');
Route::get('/processing.html','HomeController@processing')->name('processing.visa');


// Admin routes
Route::group([
    'prefix' => 'administration/visa',
    'middleware' => 'auth:admin'
], function(){

    Route::resource('transportation','TransportationController');
    Route::resource('government','GovernmentController', [
        'only' => ['index', 'edit','update']
    ]);
    Route::resource('visa-service','VisaServiceController');
});

