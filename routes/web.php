<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Login_Controller;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::get('/reg', function () {
    return view('register-user');
});
Route::get('/log', function () {
    return view('login');
});

Route::get('/tampil', function () {
    return view('tampil');
});



Route::POST('/registeruser', [RegisterController::class, 'store']);
Route::POST('/loginuser', [Login_Controller::class, 'authenticate']);

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/class', [HomeController::class, 'class'])->name('class');
Route::get('/teacher', [HomeController::class, 'teacher'])->name('teacher');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/bloggrid', [HomeController::class, 'bloggrid'])->name('bloggrid');
Route::get('/single', [HomeController::class, 'single'])->name('single');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
