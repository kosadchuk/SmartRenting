<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('index'); })->name('index');
Route::get('/services', function () { return view('services'); })->name('services');
Route::get('/faq', function () { return view('faq'); })->name('faq');
Route::get('/about', function () { return view('about'); })->name('about');
Route::fallback(function () { return view('404'); })->name('404');

Route::post('/send_contact_form', [App\Http\Controllers\MainController::class, 'getContactData']);
