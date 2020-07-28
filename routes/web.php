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

Route::get('/', 'PagesController@home');
Route::get('/services', 'PagesController@services');
Route::get('/testimonials', 'PagesController@testimonials');
Route::get('/faq', 'PagesController@faq');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/privacy-policy', 'PagesController@privacy');
Route::get('/terms-of-use', 'PagesController@terms');
