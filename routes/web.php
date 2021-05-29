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

Route::view('/pages/slick', 'pages.slick')->middleware('auth');
Route::view('/pages/datatables', 'pages.datatables')->middleware('auth');
Route::view('/pages/blank', 'pages.blank')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//DashBoard Routes

Route::get('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard');

//Admin Route

Route::get('/admins/list', [App\Http\Controllers\Dashboard\Admins\AdminsController::class, 'index'])->name('admin.list');
Route::get('/admins/add', [App\Http\Controllers\Dashboard\Admins\AdminsController::class, 'add'])->name('admin.add');
Route::get('/admins/department', [App\Http\Controllers\Dashboard\Admins\AdminsController::class, 'department'])->name('admin.department');

//Customer Route
Route::get('/customer/list', [App\Http\Controllers\Dashboard\Customer\CustomersController::class, 'index'])->name('customer.list');
Route::get('/customer/add', [App\Http\Controllers\Dashboard\Customer\CustomersController::class, 'add'])->name('customer.add');

//Projects Route
Route::get('/project/list', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'index'])->name('Project.list');
Route::get('/project/add', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'add'])->name('Project.add');
Route::get('/project/details', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'details'])->name('Project.details');
Route::get('/project/category', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'category'])->name('Project.category');
Route::get('/project/variable', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'variable'])->name('Project.variable');

//Invoice Route
Route::get('/invoice/list', [App\Http\Controllers\Dashboard\Invoice\InvoicesController::class, 'index'])->name('Invoice.list');
Route::get('/invoice/add', [App\Http\Controllers\Dashboard\Invoice\InvoicesController::class, 'add'])->name('Invoice.add');
Route::get('/invoice/details', [App\Http\Controllers\Dashboard\Invoice\InvoicesController::class, 'details'])->name('Invoice.details');

//Messaging Route
Route::get('/message', [App\Http\Controllers\Dashboard\Messaging\MessagingController::class, 'message'])->name('message');
Route::get('/notifications', [App\Http\Controllers\Dashboard\Messaging\MessagingController::class, 'notifications'])->name('notifications');
Route::get('/bulkmessage', [App\Http\Controllers\Dashboard\Messaging\MessagingController::class, 'bulkmessage'])->name('bulkmessage');

//Plan Upgrade Route
Route::match(['get', 'post'], '/planchange', function(){

    return view('settings.planchange');
})->middleware('auth');

//Report
Route::get('/report/any', [App\Http\Controllers\Dashboard\Reports\ReportsController::class, 'any'])->name('Report.any');
Route::get('/report/general', [App\Http\Controllers\Dashboard\Reports\ReportsController::class, 'general'])->name('Report.general');

//Settings
Route::get('/settings', [App\Http\Controllers\Dashboard\Settings\SettingsController::class, 'index'])->name('Setting.general');