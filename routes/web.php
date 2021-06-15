<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'indexAction'])->name('home');
Route::get('/get-properties', [HomeController::class, 'getPropertiesAction'])->name('get-properties');
Route::get('/admin', [DashboardController::class, 'indexAction'])->name('dashboard');
Route::get('/admin/property/list', [DashboardController::class, 'propertyListAction'])->name('property.list');
Route::post('/admin/property/save', [DashboardController::class, 'updateProperty'])->name('property.save');
Route::get('/admin/property/show/{id}', [DashboardController::class, 'editAction'])->name('property.edit');
Route::get('/admin/property/delete/{id}', [DashboardController::class, 'deleteAction'])->name('property.delete');

