<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/layouts/layout', function () {
//     return view('layouts.layout');
// });


Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('all.posts');
    Route::get('/post/create', 'create')->name('post.create');
    Route::POST('/post/insert', 'insert')->name('post.insert');
    Route::get('/post/edit/{id}', 'edit')->name('post.edit');
    Route::PUT('/post/update/{id}', 'update')->name('post.update');
    Route::get('/post/delete/{id}', 'delete')->name('post.delete');
    Route::get('/post/show/{id}', 'show')->name('post.show');
});


