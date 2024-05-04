<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;

// DataController Starts
Route::get('/', [ DataController ::class, 'index' ]);

Route::get('/home-2', [ DataController::class, 'home2' ]);

Route::get('/contact', [ DataController::class, 'contact' ]);

Route::get('/404', [ DataController::class,'not_found'] );

Route::get('/about', [ DataController::class,'about'] );

Route::get('/portfolio', [ DataController::class,'portfolio'] );

Route::get('/service', [ DataController::class,'service'] );

Route::get('/service-details', [ DataController::class,'service_details'] );
// DataController Ends
// BlogController Starts
Route::get('/blog', [ BlogController::class, 'blog' ]);

Route::get('/blog-details', [ BlogController::class, 'blog_details']);
// BlogController Ends

// PostController Starts
Route::get('/insert-data', [ PostController::class, 'insert'] );

Route::get('/index', [ PostController::class, 'index']);
// PostController Ends




