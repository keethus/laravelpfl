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
    return view('home.index');
});

Route::get('/about', function () {
    return view('about.main');
});

Route::get('/blog', function () {
    return view('blog.posts');
});

Route::get('/projects', function () {
    return view('projects.published');
});

Route::get('/contact', function () {
    return view('contact.contact');
});


Route::domain('studio.keeth.us')->group(function () {
    return view('projects.published');
});
/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/