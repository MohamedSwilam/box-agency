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
    return view('layouts.comming-soon');
})->name('home');

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::get('/enterprise-service', function () {
    return view('pages.services.enterprise');
})->name('enterprise');

Route::get('/cloud-solutions', function () {
    return view('pages.services.cloud');
})->name('cloud');

Route::get('/security-solutions', function () {
    return view('pages.services.security');
})->name('security');

Route::get('/voip-solutions', function () {
    return view('pages.services.voip');
})->name('voip');

Route::get('/cam-surveillance', function () {
    return view('pages.services.cam');
})->name('cam');

Route::get('/it-infrastructure', function () {
    return view('pages.services.it');
})->name('it');

Route::get('/outsource-services', function () {
    return view('pages.services.outsource');
})->name('outsource');
