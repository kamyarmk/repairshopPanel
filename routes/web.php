<?php

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

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){

    return view('dashboard');
})->middleware('auth');
Route::view('/pages/slick', 'pages.slick')->middleware('auth');
Route::view('/pages/datatables', 'pages.datatables')->middleware('auth');
Route::view('/pages/blank', 'pages.blank')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//DashBoard Routes
Route::match(['get', 'post'], '/admins/list', function(){

    return view('admin.list');
})->middleware('auth');
Route::match(['get', 'post'], '/admins/add', function(){

    return view('admin.add');
})->middleware('auth');
Route::match(['get', 'post'], '/customer/list', function(){

    return view('customer.list');
})->middleware('auth');
Route::match(['get', 'post'], '/customer/add', function(){

    return view('customer.add');
})->middleware('auth');
Route::match(['get', 'post'], '/project/list', function(){

    return view('project.list');
})->middleware('auth');
Route::match(['get', 'post'], '/project/add', function(){

    return view('project.add');
})->middleware('auth');
