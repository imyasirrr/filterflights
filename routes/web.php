<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HomeMailController;
use App\Http\Controllers\ContactFormController;

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
Route::get('/home',function(){
    return view('banner');
});
Route::get('/flight',[FlightController::class, 'index'])->name('flights.index');
Route::post('/add-flight',[FlightController::class, 'store'])->name('add.flight');

Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/blog',function(){
    return view('blog');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/book-flight',function(){
    return view('bookFlight');
});
// Route::post('/flight/book', [FlightController::class, 'book'])->name('flight.book');
// Route::post('/flight/confirm', [FlightController::class, 'confirm'])->name('flight.confirm');
Route::get('/book-store', function(){
    return view('bookStore');
});
Route::post('/post-messege', [ContactFormController::class, 'post_messege']);


Route::post('/home-mail', [HomeMailController::class, 'home_mail']);
Route::post('/home-mail', [HomeMailController::class, 'home_mail']);