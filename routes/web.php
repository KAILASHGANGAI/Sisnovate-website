<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::view('/about', 'about')->name('about');
Route::view('/products', 'products')->name('products');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'insert'])->name('contact.insert');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/blogs', 'blog')->name('blogs');
Route::view('/career', 'career')->name('career');
