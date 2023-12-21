<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Cox_ContentController;

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
    return view('master');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin.dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin.latest_information', function () {
    return view('admin.latest_information');
});
Route::get('/admin.about', function () {
    return view('admin.about');
});
Route::get('/admin.roadmap', function () {
    return view('admin.roadmap');
});
Route::get('/admin.video', function () {
    return view('admin.video');
});
Route::get('/admin.structure_of_organization', function () {
    return view('admin.video');
});
Route::get('/admin.Agenda', function () {
    return view('admin.Agenda');
});
Route::get('/admin.cox_content', function () {
    return view('admin.cox_content');
});
Route::get('/admin.portofolio', function () {
    return view('admin.portofolio');
});


Route::get('/admin.cox_content', [Cox_ContentController::class, 'cox_content']);
Route::get('/sign-in', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/sign-in', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');