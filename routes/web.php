<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/project', function () {
    return view('projects.project');
});

Route::get('/detail', function () {
    return view('projects.detail');
});

Route::get('/contact', function () {
    return view('contact');
});

//routing page website
Route::get('projects/dbl',[ProjectController::class, 'dbl'])->name('projects/dbl');
Route::get('projects/camp',[ProjectController::class, 'camp'])->name('projects/camp');
Route::get('projects/esport',[ProjectController::class, 'esport'])->name('projects/esport');
Route::get('projects/project',[ProjectController::class, 'project'])->name('projects/project');
Route::get('careers',[ProjectController::class, 'careers'])->name('careers');
Route::get('price/company',[PriceController::class, 'company'])->name('price/company');
Route::get('price/video',[PriceController::class, 'video'])->name('price/video');
Route::get('price/photo',[PriceController::class, 'photo'])->name('price/photo');
Route::get('price/drone',[PriceController::class, 'drone'])->name('price/drone');
Route::get('footer/tutorial',[FooterController::class, 'tutorial'])->name('footer/tutorial');
Route::get('footer/premiere',[FooterController::class, 'premiere'])->name('footer/premiere');
Route::get('footer/after',[FooterController::class, 'after'])->name('footer/after');
Route::get('footer/final',[FooterController::class, 'final'])->name('footer/final');
Route::get('footer/davinci',[FooterController::class, 'davinci'])->name('footer/davinci');
Route::get('footer/lightroom',[FooterController::class, 'lightroom'])->name('footer/lightroom');
Route::get('footer/master',[FooterController::class, 'master'])->name('footer/master');
Route::get('footer/photoshop',[FooterController::class, 'photoshop'])->name('footer/photoshop');

Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::get('/contact', [ContactController::class, 'create'])->name('contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('send-message');


//routing admin
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login-proses',[LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/register-proses',[LoginController::class, 'register_proses'])->name('register-proses');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.' ], function(){
    Route::get('admin/admin',[ProjectController::class, 'admin'])->name('admin/admin');

Route::get('/get/{id}', [ProjectController::class, 'hapus'])->name('admin.hapus');

Route::get('admin/admin_user',[AdminController::class, 'user'])->name('admin/admin_user');
Route::get('admin/admin_pesanan',[AdminController::class, 'pesanan'])->name('admin/admin_pesanan');
Route::delete('/delete/{id}',[AdminController::class, 'delete'])->name('pesanan.delete');
Route::delete('/hapus/{id}',[AdminController::class, 'hapus'])->name('user.hapus');
Route::get('/edit/{id}',[AdminController::class, 'edit'])->name('admin_pesanan_edit');
Route::get('/buat', [AdminController::class, 'buat'])->name('user_buat');

});




