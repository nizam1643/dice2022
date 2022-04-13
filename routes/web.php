<?php

use App\Http\Controllers\MyPaymentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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
    return Redirect::to('/page/home');
});

//System Level Module
Route::controller(PageController::class)->name('page.')->prefix('page')->group(function () {
    Route::get('/home', 'index')->name('index');
    Route::get('/form/pre-register', 'preregister')->name('preregister');
    Route::get('/form/jury-register', 'juryregister')->name('juryregister');
    Route::post('/form/jury', 'juryform')->name('juryform');
    Route::get('/form/success-register', 'successregister')->name('successregister');
    Route::get('/form/submit', 'submit')->name('submit');
    Route::get('/activity', 'activity')->name('activity');
    Route::get('/award/list', 'awardlist')->name('awardlist');
    Route::get('/award/rule', 'awardrule')->name('awardrule');
    Route::get('/award/winner', 'awardwinner')->name('awardwinner');
    Route::get('/virtual/project', 'vproject')->name('vproject');
    Route::get('/virtual/marketplace', 'vmarketplace')->name('vmarketplace');
    Route::get('/virtual/company/{id}', 'vcompany')->name('vcompany');
    Route::get('/virtual/company/{id}/{item}', 'vshow')->name('vshow');
    Route::get('/about', 'about')->name('about');

    Route::post('/voteposter1', 'voteposter1')->name('voteposter1');

    Route::get('test/company', 'company')->name('company');
    Route::get('test/companyProject', 'companyProject')->name('companyProject');
    Route::get('test/virtual/project', 'vproject1')->name('vproject1');
    Route::get('test/virtual/marketplace', 'vmarketplace1')->name('vmarketplace1');
});

Route::controller(MyPaymentController::class)->name('payment.')->prefix('payment')->group(function () {
    Route::get('/home', 'create')->name('create');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
