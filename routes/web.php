<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
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
Route::get('/blogs', [BlogController::class, 'view'])->name('blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'singleBlog'])->name('blogs.view');
Route::get('/blogs/category/{slug}', [BlogController::class, 'showByCategory'])->name('blogs.category');
Route::view('/career', 'career')->name('career');

Route::view('/login', 'admin/auth/login');
Route::Post('login', [LoginController::class, 'login'])->name('login');
#admin 
Route::group(['middleware' => 'auth'], function () {
    Route::view('/admin', 'admin/dashboard')->name('admin');
    Route::resource('admin/blogs', BlogController::class);
    Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');
    Route::get('admin/contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::delete('admin/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
