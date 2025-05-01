<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('home');
});

Route::get('/about',function(){
return view('dashBoard');
})->name("about_section");

route::get('/contact',function(){
return redirect()->route('about_section')->with('success','Login successful');
});

