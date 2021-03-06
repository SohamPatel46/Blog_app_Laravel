<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('home');
});

Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class,'store'])->name('blog.store');
Route::delete('/blog/{id}/delete', [BlogController::class,'delete'])->name('blog.delete');
Route::get('/blog/{id}/comment', [BlogController::class,'comment'])->name('blog.comment');
Route::get('/blog/{id}/show', [BlogController::class,'show'])->name('blog.show');
Route::post('/blog/{id}/commentStore', [BlogController::class,'commentStore'])->name('blog.commentStore');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
