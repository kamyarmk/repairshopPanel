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

Route::get('/RegisterDevice', [App\Http\Controllers\RegisterDeviceController::class, 'index'])->name('RegisterDevice');
Route::get('/DeviceList', [App\Http\Controllers\DeviceListController::class, 'index'])->name('DeviceList');
Route::get('/UserList', [App\Http\Controllers\UserListController::class, 'index'])->name('UserList');
Route::get('/Reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('Reports');
Route::get('/Devices', [App\Http\Controllers\DevicesController::class, 'index'])->name('Reports');

Route::post('/RegisterDevice', [App\Http\Controllers\RegisterDeviceController::class, 'create'])->name('RegisterDevice');
Route::post('/Devices', [App\Http\Controllers\DevicesController::class, 'create'])->name('Devices');


Route::get('/deviceEdit/{DeviceID}', [App\Http\Controllers\DeviceEditController::class, 'index'])->name('deviceEdit');
Route::get('/UserEdit/{UserID}', [App\Http\Controllers\UserEditController::class, 'index'])->name('UserEdit');
Route::post('/deviceEdit/{DeviceID}', [App\Http\Controllers\DeviceEditController::class, 'update'])->name('deviceEdit');
Route::post('/UserEdit/{UserID}', [App\Http\Controllers\UserEditController::class, 'update'])->name('UserEdit');

Route::post('/deviceEdit/{DeviceID}', [App\Http\Controllers\DeviceEditController::class, 'remove'])->name('deviceEdit');
Route::post('/UserEdit/{UserID}', [App\Http\Controllers\UserEditController::class, 'remove'])->name('UserEdit');
