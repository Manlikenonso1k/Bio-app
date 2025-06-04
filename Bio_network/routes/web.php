<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/niggas',function(){
    $ninjas= [
        ['name'=>'mariao','skill'=>'manager','id'=>'1'],
        ['name'=> 'paul','skill'=> 'scam','id'=> '2'],
        ['name'=> 'nonso','[skill'=> 'programming','id'=> '3'],
    ];
    return view('niggas.index', ['greeting'=>'hello', 'ninjas'=>$ninjas]);
});