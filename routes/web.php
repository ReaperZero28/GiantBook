<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;

Route::get('/', function() {
    return redirect('/home');
});

Route::get('/home', [BookController::class, 'index']);

Route::get('/bookdetail/{bookID}', [BookController::class, 'showBookDetail']);

Route::get('/category/{categoryBook}', [CategoryController::class, 'showCategory']);

Route::get('/publisher', [PublisherController::class, 'index']);

Route::get('/publisherdetail/{publisherID}', [PublisherController::class, 'showPublisherDetail']);

Route::get('/contact', [HomeController::class, 'index']);

Route::get('/formpublisher', [PublisherController::class, 'publisherForm']);

Route::post('/addpublisher', [PublisherController::class, 'insertPublisher']);
