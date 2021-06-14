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
Route::get('/admins/edit', [App\Http\Controllers\Dashboard\Admins\AdminsController::class, 'edit'])->name('admin.edit');
Route::get('/admins/department', [App\Http\Controllers\Dashboard\Admins\AdminsController::class, 'department'])->name('admin.department');

//Customer Route
Route::get('/customer/list', [App\Http\Controllers\Dashboard\Customer\CustomersController::class, 'index'])->name('customer.list');
Route::get('/customer/add', [App\Http\Controllers\Dashboard\Customer\CustomersController::class, 'add'])->name('customer.add');
Route::get('/customer/edit/{id}', [App\Http\Controllers\Dashboard\Customer\CustomersController::class, 'edit'])->name('customer.edit');
Route::put('/customer/edit/{id}', [App\Http\Controllers\Dashboard\Customer\CustomersController::class, 'update'])->name('customer.update');
Route::post('/customer/add', [App\Http\Controllers\Dashboard\Customer\CustomersController::class, 'create'])->name('customer.create');

//Projects Route
Route::get('/project/list', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'index'])->name('Project.list');
Route::get('/project/add', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'add'])->name('Project.add');
Route::get('/project/edit', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'edit'])->name('Project.edit');
Route::get('/project/details', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'details'])->name('Project.details');
Route::get('/project/category', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'category'])->name('Project.category');
    //Categories Add and Edit
    Route::get('/project/category/add', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'categoryAdd'])->name('Project.category.add');
    Route::get('/project/category/edit', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'categoryEdit'])->name('Project.category.edit');
Route::get('/project/variable', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'variable'])->name('Project.variable');
    //Variables Add and Edit
    Route::get('/project/variable/add', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'variableAdd'])->name('Project.variable.add');
    Route::get('/project/variable/edit', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'variableEdit'])->name('Project.variable.edit');
//Projects Other Data
Route::get('/project/qc', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'qc'])->name('Project.qc.list');
    //QC Datas
    Route::get('/project/qc/add', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'qcAdd'])->name('Project.qc.add');
    Route::get('/project/qc/edit', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'qcEdit'])->name('Project.qc.edit');
Route::get('/project/problems', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'problems'])->name('Project.problems');
    //Problems Datas
    Route::get('/project/problems/add', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'problemsAdd'])->name('Project.problems.add');
    Route::get('/project/problems/edit', [App\Http\Controllers\Dashboard\Project\ProjectsConstroller::class, 'problemsEdit'])->name('Project.problems.edit');


//Products Route
Route::get('/product/list', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'index'])->name('product.list');
Route::get('/product/add', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'add'])->name('product.add');
Route::get('/product/edit', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'edit'])->name('product.edit');
Route::get('/product/details', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'details'])->name('product.details');
Route::get('/product/category', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'category'])->name('product.category');
    //Categories Add and Edit
    Route::get('/product/category/add', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'categoryAdd'])->name('product.category.add');
    Route::get('/product/category/edit', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'categoryEdit'])->name('product.category.edit');
Route::get('/product/tags', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'tags'])->name('product.tags');
    //Tags Add and Edit
    Route::get('/product/tags/add', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'tagsAdd'])->name('product.tags.add');
    Route::get('/product/tags/edit', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'tagsEdit'])->name('product.tags.edit');
//Products Other Data
Route::get('/product/attributes', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'attributes'])->name('product.attributes');
    //attributes Datas
    Route::get('/product/attributes/add', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'attributesAdd'])->name('product.attributes.add');
    Route::get('/product/attributes/edit', [App\Http\Controllers\Dashboard\product\ProductsConstroller::class, 'attributesEdit'])->name('product.attributes.edit');

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


Route::get('/update', [App\Http\Controllers\Dashboard\DashboardController::class, 'updater'])->name('updater');