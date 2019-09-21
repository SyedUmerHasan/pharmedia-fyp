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

// Authentication page Routes
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/register', 'Auth\RegisterController@register');

    // Password Reset Routes...
Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');

// Notification
Route::get('/notification/MarkAllAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('MarkAllAsRead');



// Ecommerce Pages
Route::get('/', 'MainThemeController@HomePage')->name('HomePage');
Route::get('/AboutUs', 'MainThemeController@AboutUsPage')->name('AboutUs');
Route::get('/Services', 'MainThemeController@Services')->name('Services');
Route::get('/AddApointment', 'AppointmentController@AddApointment')->name('AddApointment');



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/CreateProducts', 'ProductAdminController@CreateProducts')->name('admin.CreateProducts');
    Route::get('/EditProduct/{ProductId}', 'ProductAdminController@EditProduct')->name('admin.EditProduct');
    Route::post('/AddProducts', 'ProductAdminController@AddProducts')->name('admin.AddProducts');
    Route::post('/UpdateProduct/{ProductId}', 'ProductAdminController@UpdateProduct')->name('admin.UpdateProduct');
    Route::get('/ListProducts', 'ProductAdminController@ListProducts')->name('admin.ListProducts');
    Route::get('/ListProducts/GetListProducts', 'ProductAdminController@GetListProductsDuplicate')->name('GetListProducts');
    Route::get('/changeActive/{product_id}', 'ProductAdminController@changeActive')->name('changeActive');
    Route::get('/delete/{product_id}', 'ProductAdminController@deleteProduct')->name('deleteProduct');
    Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/', 'AdminController@index')->name('home');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/checkpassword', 'AdminController@checkpassword')->name('checkpassword');
    Route::match(['get', 'post'], '/updateusername', 'AdminController@updateusername')->name('updateusername');
    Route::match(['get', 'post'], '/updatepassword', 'AdminController@updatepassword')->name('updatepassword');
    /**
     * Route Attribute
     */
    Route::group(['prefix' => 'symptom'], function () {
        Route::get('/', 'SymptomController@index')->name('symptom.index');
        Route::get('/create', 'SymptomController@create')->name('symptom.create');
        Route::get('/edit/{symptom_id}', 'SymptomController@edit')->name('symptom.edit');
        Route::match(['get', 'post'], '/update/{symptom_id}', 'SymptomController@update')->name('symptom.update');
        Route::match(['get', 'post'], '/save', 'SymptomController@save')->name('symptom.save');
        Route::get('/delete/{symptom_id}', 'SymptomController@delete')->name('symptom.delete');
        Route::match(['get', 'post'], '/updateproduct/{symptom_id}', 'SymptomController@updateproduct')->name('symptom.updateproduct');
    });

    Route::group(['prefix' => 'weight'], function () {
        Route::get('/', 'WeightController@index')->name('weight.index');
    });
    Route::group(['prefix' => 'diease'], function () {
        Route::get('/', 'DieaseController@index')->name('diease.index');
        Route::get('/create', 'DieaseController@create')->name('diease.create');
        Route::get('/edit/{diease_id}', 'DieaseController@edit')->name('diease.edit');
        Route::match(['get', 'post'], '/update/{diease_id}', 'DieaseController@update')->name('diease.update');
        Route::match(['get', 'post'], '/save', 'DieaseController@save')->name('diease.save');
        Route::get('/delete/{diease_id}', 'DieaseController@delete')->name('diease.delete');
        Route::match(['get', 'post'], '/updateproduct/{diease_id}', 'DieaseController@updateproduct')->name('diease.updateproduct');
    });
    Route::group(['prefix' => 'patients'], function () {
        Route::get('/', 'PatientController@index')->name('patients.index');
        Route::get('/create', 'PatientController@create')->name('patients.create');
        Route::get('/edit/{patient_id}', 'PatientController@edit')->name('patient.edit');
        Route::match(['get', 'post'], '/update/{patient_id}', 'PatientController@update')->name('patients.update');
        Route::match(['get', 'post'], '/save', 'PatientController@save')->name('patients.save');
        Route::get('/delete/{patient_id}', 'PatientController@delete')->name('patients.delete');
        Route::match(['get', 'post'], '/updateproduct/{patient_id}', 'PatientController@updateproduct')->name('patients.updateproduct');
    });

    /**
     * Route Attribute
     */

    Route::group(['prefix' => 'api'], function () {
         
        Route::get('symptom', 'WebsiteDatatableController@symptom')->name('symptom');
        Route::get('diease', 'WebsiteDatatableController@diease')->name('diease');
        Route::get('patients', 'WebsiteDatatableController@patients')->name('patients');
        Route::get('weight', 'WebsiteDatatableController@weight')->name('weight');


    });

    
});
