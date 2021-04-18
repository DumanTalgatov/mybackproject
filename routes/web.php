<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ShoppersController;
use App\Http\Controllers\FeedbacksController;
use App\Models\CustomersModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/contacts', function () {
//     return view('contacts');
// })->name('contacts');

// Route::get('/auth', function () {
//     return view('auth');
// })->name('auth');

Route::get('/auth', [ShoppersController::class, 'index'])->name('auth');
Route::post('/auth', [ShoppersController::class, 'store'])->name('auth');


Route::get('/contacts', [FeedbacksController::class, 'index'])->name('contacts');
Route::post('/contacts', [FeedbacksController::class, 'store'])->name('contacts');

// Route::get('send/{id}', 'App\Http\Controllers\MailController@sendEmail')->name('send');

Route::get('/customer', [CustomersController::class, 'index'])->name('customer');
Route::post('/customer', [CustomersController::class, 'store'])->name('customer');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
