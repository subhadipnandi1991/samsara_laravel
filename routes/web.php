<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', function() {
  if (session()->has('user')) {
    session()->pull('user');
  }
  return redirect('/');
});

Route::get('/', [HomeController::class, 'index']);
Route::view('/', 'homepage');

Route::get('/products/', [ProductController::class, 'productDetails']);
Route::view('/products/safety', 'safety');
Route::view('/company/contact', 'contact');
Route::view('/industries/logistics', 'logistics');
Route::view('/support/customerservices', 'customerservices');
Route::view('/solutions/customer-experience', 'customerExperience');
Route::get('/blog/', [BlogController::class, 'blogDetails']);
Route::get('/blog/{id}', [BlogController::class, 'blogPage'])->name('blogDetails');
Route::get('/fetch-all-blogs-n-categories', [BlogController::class, 'fetchAllBlogsAndCategories']);
Route::get('/fetch-all-categories', [BlogController::class, 'fetchAllCategories']);
Route::get('/fetch-blogs-by-category/{id}', [BlogController::class, 'fetchBlogsByCategory'])->name('fetchBlogsByCategory');
