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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Registering the Device
Route::get('/RegisterDevice', [App\Http\Controllers\RegisterDeviceController::class, 'create'])->name('registerDevice.create');
Route::post('/RegisterDevice', [App\Http\Controllers\RegisterDeviceController::class, 'store'])->name('registerDevice.store');

//Registered Devices List
Route::get('/DeviceList', [App\Http\Controllers\DeviceListController::class, 'index'])->name('deviceList.index');
Route::put('/DeviceList/{device}', [App\Http\Controllers\DeviceListController::class, 'update'])->name('deviceList.update');
Route::delete('/DeviceList/delete/{device}', [App\Http\Controllers\DeviceListController::class, 'destroy'])->name('deviceList.destroy');

//Registered Device Detailed Edit
Route::get('/DeviceList/{device}', [App\Http\Controllers\DeviceListController::class, 'show'])->name('deviceList.show');

//Users List
Route::get('/UserList', [App\Http\Controllers\UserListController::class, 'index'])->name('userList.index');
Route::put('/UserList/{user}', [App\Http\Controllers\UserListController::class, 'update'])->name('userList.update');
Route::delete('/UserList/{user}', [App\Http\Controllers\UserListController::class, 'destory'])->name('userList.destroy');

//User Detailed Page
Route::get('/UserList/{user}', [App\Http\Controllers\UserListController::class, 'show'])->name('userList.show');

//Invoices List
Route::get('/Invoice', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice.index');
Route::put('/Invoice/{invoice}', [App\Http\Controllers\InvoiceController::class, 'update'])->name('invoice.update');
Route::delete('/Invoice/{invoice}', [App\Http\Controllers\InvoiceController::class, 'destory'])->name('invoice.destory');

//Invoice Detailed Page
Route::get('/Invoice/{invoice}', [App\Http\Controllers\InvoiceController::class, 'show'])->name('invoice.show');



//Device Types List
Route::get('/Devices', [App\Http\Controllers\DevicesController::class, 'index'])->name('devices');
Route::put('/Devices/{Devices}', [App\Http\Controllers\DevicesController::class, 'update'])->name('devices.update');
Route::delete('/Devices/{Devices}', [App\Http\Controllers\DevicesController::class, 'destory'])->name('devices.destory');


//Device Detailed Page
Route::get('/Devices/{Devices}', [App\Http\Controllers\DevicesController::class, 'show'])->name('devices.show');


//Reports
Route::get('/Reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('reports.index');
Route::put('/Reports/{report}', [App\Http\Controllers\ReportsController::class, 'update'])->name('reports.update');
Route::delete('/Reports/{report}', [App\Http\Controllers\ReportsController::class, 'destory'])->name('reports.destory');

//Reports Detailed Page
Route::get('/Reports/{report}', [App\Http\Controllers\ReportsController::class, 'show'])->name('reports.show');

//Department Section
Route::get('/Department', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department.index');
Route::get('/Department/create', [App\Http\Controllers\DepartmentController::class, 'create'])->name('department.create');
Route::get('/Department/{department}', [App\Http\Controllers\DepartmentController::class, 'show'])->name('department.show');
Route::put('/Department/{department}', [App\Http\Controllers\DepartmentController::class, 'update'])->name('department.update');
Route::delete('/Department/{department}', [App\Http\Controllers\DepartmentController::class, 'destory'])->name('department.destroy');
Route::get('/DepartmentVue', [App\Http\Controllers\DepartmentController::class, 'vue'])->name('department.data');

// Vue Routes
Route::get('/UsersVue', [App\Http\Controllers\UserListController::class, 'vue'])->name('userList.data');
Route::get('/regdevicevue', [App\Http\Controllers\DeviceListController::class, 'data'])->name('deviceList.data');
Route::get('/invoicesvue', [App\Http\Controllers\InvoiceController::class, 'data'])->name('invoice.data');
Route::post('/UserCreateVue', [App\Http\Controllers\UserListController::class, 'vueCreate'])->name('userList.create');
Route::get('/devicevuew', [App\Http\Controllers\DevicesController::class, 'data'])->name('devices.data');
Route::post('/Devices', [App\Http\Controllers\DevicesController::class, 'store'])->name('devices.store');

// Print Function
Route::get('/invoice/print/{id}', [App\Http\Controllers\InvoiceController::class, 'print'])->name('invoice.print');


