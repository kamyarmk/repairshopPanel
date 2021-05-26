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

//Admin Route
Route::match(['get', 'post'], '/admins/list', function(){

    return view('admin.list');
})->middleware('auth');
Route::match(['get', 'post'], '/admins/add', function(){

    return view('admin.add');
})->middleware('auth');

Route::match(['get', 'post'], '/admins/department', function(){

    return view('admin.department');
})->middleware('auth');

//Customer Route
Route::match(['get', 'post'], '/customer/list', function(){

    return view('customer.list');
})->middleware('auth');
Route::match(['get', 'post'], '/customer/add', function(){

    return view('customer.add');
})->middleware('auth');

//Projects Route
Route::match(['get', 'post'], '/project/list', function(){

    return view('project.list');
})->middleware('auth');
Route::match(['get', 'post'], '/project/add', function(){

    return view('project.add');
})->middleware('auth');
Route::match(['get', 'post'], '/project/details', function(){

    return view('project.details');
})->middleware('auth');

Route::match(['get', 'post'], '/project/category', function(){

    return view('project.category.list');
})->middleware('auth');
Route::match(['get', 'post'], '/project/variable', function(){

    return view('project.variable.list');
})->middleware('auth');


//Invoice Route
Route::match(['get', 'post'], '/invoice/list', function(){

    return view('invoice.list');
})->middleware('auth');
Route::match(['get', 'post'], '/invoice/add', function(){

    return view('invoice.add');
})->middleware('auth');
Route::match(['get', 'post'], '/invoice/details', function(){

    return view('invoice.details');
})->middleware('auth');

//Messaging Route
Route::match(['get', 'post'], '/message', function(){

    return view('message.chat');
})->middleware('auth');
Route::match(['get', 'post'], '/notifications', function(){

    return view('message.notifications');
})->middleware('auth');
Route::match(['get', 'post'], '/bulkmessage', function(){

    return view('message.bulkmessage');
})->middleware('auth');

//Plan Upgrade Route
Route::match(['get', 'post'], '/planchange', function(){

    return view('settings.planchange');
})->middleware('auth');

//Report
Route::match(['get', 'post'], '/report/any', function(){

    return view('reports.any');
})->middleware('auth');
Route::match(['get', 'post'], '/report/general', function(){

    return view('reports.general');
})->middleware('auth');
