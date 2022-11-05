<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Home\HomepageController;

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


Route::group(['IsAdmin' => 'admin'], function () {
  Route::resource('category', CategoriesController::class);
  Route::resource('package', PackageController::class);
});

// Route::resource('category', CategoriesController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Backend.index');


Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);


// Route::get('/homepage', function () {
//   return view('Frontend.index', );
// });

Route::get('/homepage', [HomepageController::class, 'index']);

Route::get('frontend/package', [HomepageController::class, 'showpackages'])->name('frontend.package');
