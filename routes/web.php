<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('projects/dbl',[ProjectController::class, 'dbl'])->name('projects/dbl');
Route::get('projects/camp',[ProjectController::class, 'camp'])->name('projects/camp');
Route::get('projects/esport',[ProjectController::class, 'esport'])->name('projects/esport');
Route::get('projects/project',[ProjectController::class, 'project'])->name('projects/project');
