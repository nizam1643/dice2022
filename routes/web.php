<?php

use App\Http\Controllers\PageController;
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
    Route::get('/form/success-register', 'successregister')->name('successregister');
    Route::get('/form/submit', 'submit')->name('submit');
    Route::get('/activity', 'activity')->name('activity');
    Route::get('/award/list', 'awardlist')->name('awardlist');
    Route::get('/award/rule', 'awardrule')->name('awardrule');
    Route::get('/award/winner', 'awardwinner')->name('awardwinner');
    Route::get('/virtual/project', 'vproject')->name('vproject');
    Route::get('/virtual/marketplace', 'vmarketplace')->name('vmarketplace');
    Route::get('/about', 'about')->name('about');
});
