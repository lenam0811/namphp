<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/namngu', function(){
    return 'Anh ';
})->name('namngu');
route::get('/namngu/{name}', function($name){
    return 'Anh ' . $name . '!';
})->name('namngu1');
route::get('/conga', function(){
    return redirect('/');
});