<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\SiteSettings;
use App\AccountSettings;
use App\Transaction;
use App\Package;

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



View::composer('*', function ($view) {
    $data = SiteSettings::first();
    $packages = Package::get();

    $view->with('site_settings', $data);
    $view->with('packages', $packages);


    if (Auth::user()) {


        $transactions = App\Transaction::whereUserId(Auth::id())->orderBy('created_at', 'DESC')->get();
        $account = Auth::user()->account_settings;


        $view->with('transactions', $transactions);
        $view->with('account', $account);
    }

});

Route::get('maintenance', function() {
    return view('backend.maintenance.index');
});

Route::get('refresh-csrf', function(){
    return csrf_token();
});


Route::get('/', 'PageController@index')->name('home');
Route::get('/about-us', 'PageController@about')->name('about');
Route::get('/packages', 'PageController@packages')->name('pricing');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/fxu/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/fxu/profile', 'ProfileController@index')->name('profile');


Route::name('account.')->group(function () {
    Route::get('/fxu/account-settings', 'AccountSettingsController@edit')->name('settings');
    Route::post('/fxu/account-settings', 'AccountSettingsController@edit')->name('settings');

    Route::get('/fxu/account-settings/check', 'AccountSettingsController@checkAccount')->name('settings.check');

    Route::post('/fxu/account-settings/check', 'AccountSettingsController@checkAccount')->name('settings.check');
});

Route::name('bill.')->group(function () {
    Route::get('/fxu/bills', 'BillerController@index')->name('services');

});


Route::name('trans.')->group(function () {
    Route::get('/fxu/transaction/deposit', 'TransactionController@deposit')->name('deposit');

    Route::post('/fxu/transaction/deposit', 'TransactionController@deposit')->name('deposit');

    Route::get('/fxu/transaction/confirm_deposit', 'TransactionController@confirm_deposit')->name('deposit.confirm');

    Route::get('/fxu/transaction/confirm_withdrawal', 'TransactionController@confirm_withdrawal')->name('withdrawal.confirm');

    Route::get('/fxu/transaction/withdraw', 'TransactionController@withdraw')->name('withdraw');
    Route::post('/fxu/transaction/withdraw', 'TransactionController@withdraw')->name('withdraw');

    Route::get('/fxu/transaction/history', 'TransactionController@history')->name('history');

});

Route::name('invest.')->group(function () {
    Route::get('/fxu/myinvestments', 'InvestmentController@index')->name('index');

    Route::get('/fxu/myinvestments/{id}', 'InvestmentController@details')->name('details');

    Route::post('/fxu/myinvestments', 'InvestmentController@add_invest')->name('add');
});


Route::name('admin.')->group(function () {
    Route::get('/admin/packages', 'PackageController@packages')->name('packages');

    Route::post('/admin/packages', 'PackageController@packages')->name('packages');

    Route::get('/admin/packages/edit/{id}', 'PackageController@packages')->name('package.edit');

    Route::post('/admin/packages/edit/{id}', 'PackageController@packages')->name('package.edit');

    Route::get('/admin/packages/{id}/delete', 'PackageController@deletePackage')->name('package.delete');

    Route::get('/admin/messages/', 'MessageController@index')->name('messages');
    Route::post('/admin/messages/', 'MessageController@index')->name('messages');
    Route::get('/admin/messages/{id}/delete', 'MessageController@delete')->name('message.delete');
    Route::get('/admin/messages/{id}/edit', 'MessageController@edit')->name('message.edit');


    Route::get('/admin/client-requests', 'AdminController@client_requests')->name('requests');

    Route::get('/admin/client-request/edit/{id}', 'AdminController@editClientRequest')->name('client.request.edit');

    Route::post('/admin/client-request/edit/{id}', 'AdminController@editClientRequest')->name('client.request.edit');

    Route::get('/admin/client-request/delete/{id}', 'AdminController@deleteClientRequest')->name('client.request.delete');

    Route::get('/admin/users', 'AdminController@users')->name('users');
    Route::get('/admin/user/edit/{id}', 'AdminController@editUser')->name('user.edit');
    Route::post('/admin/user/edit/{id}', 'AdminController@editUser')->name('user.edit');
    Route::get('/admin/user/delete/{id}', 'AdminController@deleteUser')->name('user.delete');

    Route::get('/admin/payments', 'AdminController@get_payments')->name('payment.requests');
    Route::get('/admin/payment/address', 'AdminController@add_deposit_address')->name('payment.address.add');
    Route::get('/admin/payment/decline/{id}', 'AdminController@decline_payment')->name('payment.decline');
    Route::get('/admin/payment/approve/{id}/{amount?}', 'AdminController@approve_payment')->name('payment.approve');

    Route::get('/admin/site-settings', 'AdminController@site_settings')->name('site.settings');

    Route::post('/admin/site-settings', 'AdminController@site_settings')->name('site.settings');

    

});

Route::name('referral.')->group(function () {
    Route::get('/fxu/index', 'ReferralController@index')->name('index');
    Route::get('/fxu/downline/{id}/commissions', 'ReferralController@referral_commissions')->name('commissions');
});

Route::name('invest.')->group(function () {
    Route::get('/fxu/myinvestments', 'InvestmentController@index')->name('index');

    Route::post('/fxu/myinvestments', 'InvestmentController@add_invest')->name('add');
});


Route::name('earning.')->group(function () {
    Route::get('earning/updater', 'EarningUpdaterController@updateInvestorBalance')->name('earning.updater');
});

Route::get('fx/investment/rstatus', 'EarningUpdaterController@rInvestmentsStatus')->name('earning.investment.rst');

Route::name('user.')->group(function () {
    Route::post('password/update', 'ProfileController@updatePassword')->name('password.update');
});

//Execute migration

/*
Route::get('/mego', function () {
    \Artisan::call('migrate:refresh --seed');
    dd('Done');
});
*/




Auth::routes();
