<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/blog', function(){
    return view('blog');
});
Route::get('/blog-details', function(){
    return view('blog-details');
});
Route::get('/home-2', function(){
    return view('home-2');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/404', function(){
    return view('404');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/portfolio', function(){
    return view('portfolio');
});
Route::get('/service', function(){
    return view('service');
});
Route::get('/service-details', function(){
    return view('service-details');
});
