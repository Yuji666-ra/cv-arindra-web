<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\OrderController;


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

Route::group(['prefix' => 'admin', 'middleware' =>  ['auth'], 'as' => 'admin'] , function(){

    });

    Route::get('admin',[ProjectController::class, 'admin'])->name('admin');
    Route::get('auth/login',[ProjectController::class, 'login'])->name('auth/login');

Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::get('/send-email', [ContactController::class, 'index'])->name('contact-us');
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send-email');

Route::get('/contact', 'ContactController@ContactMail');

Route::get('/get/{id}', [ProjectController::class, 'hapus'])->name('admin.hapus');





