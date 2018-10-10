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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/', 'HomeController@index');

Route::get('/admin-profile', 'AdminProfileController@index')->name('admin-profile');

Route::get('/index', 'AdminController@show');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/login-register', 'LoginRegisterController@index')->name('login-register');
Route::get('/plan/{id}', 'PlanController@show')->name('plan');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
    Route::resource('profile', 'ProfileController');
    Route::resource('competition', 'CompetitionController');
    Route::resource('payments', 'PaymentsController');
    Route::resource('faq', 'FaqController');
    Route::resource('privacy', 'PrivacyController');




    Route::group(['prefix' => 'subscribe'], function(){

        Route::post('/', 'PlanController@subscribe')->name('subscribe');
        Route::get('/cancel', 'PlanController@confirmCancellation')->name('confirmCancellation');
        Route::post('/cancel', 'PlanController@cancelSubscription')->name('subscriptionCancel');
        Route::post('/resume', 'PlanController@resumeSubscription')->name('subscriptionResume');

        Route::get('/invoices', 'InvoiceController@index')->name('invoices');
        Route::get('/invoice/{id}', 'InvoiceController@download')->name('downloadInvoice');

    });
});


// Handling Stripe Webhooks
Route::post(
    'stripe/webhook',
    '\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook'
);
