<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/niggas',function(){
    return view('niggas.index');
});