<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\VisitorContact;


use App\Http\Controllers\ContactsController;
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

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/android', function(){
    return view('androidPage');
});

Route::get('/portfolioProject-2018', function(){
    return view('portfolioPage');
});

Route::get('/restaurant', function(){
    return view('restaurantPage');
});

Route::get('/visitor', VisitorContact::class);

Auth::routes();