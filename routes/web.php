<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_Auth;
use App\Http\Controllers\Role_Controller;
use App\Http\Controllers\User_Controller;

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
Route::get('/admin/login', [Admin_Auth::class,"loginShow"])->name('admin-login');
Route::post('/admin/login', [Admin_Auth::class,"login"])->name('admin-login');
Route::get('/admin/regi', [Admin_Auth::class,"regiShow"])->name('admin-regi');
Route::post('/admin/regi', [Admin_Auth::class,"regiStore"])->name('admin-regi');
Route::get('/admin/dash', [Admin_Auth::class,"dash"])->name('admin-dash');
Route::resource('/role', Role_Controller::class);
Route::resource('/user', User_Controller::class);