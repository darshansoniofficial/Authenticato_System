<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;



Route::get('/', function () {
    return view('login');
});
Route::get('/register', 'App\Http\Controllers\Users@create');
Route::post('/register', 'App\Http\Controllers\Users@register_create');
Route::post('/login', 'App\Http\Controllers\Users@login');

Route::prefix(['middleawre'=>['LogCheck']], function(){
    Route::get('/list', 'App\Http\Controllers\Users@list');


});

