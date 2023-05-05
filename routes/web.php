<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlideshowController;

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

Route::get('/', [SlideshowController::class, 'show']);

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/admins', function () {
    return view('admin.dashboard');
});
Route::get('/admins/login', function () {
    return view('admin.login');
});
Route::get('/admins/slideshow', [SlideshowController::class, 'slideshow']);
