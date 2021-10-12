<?php

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
    return view('welcome');
});
Route::get('/hello',function(){
    echo "HAI SAYANG";
});
Route::get('/name/{name}',function($name){
    return "hello" . $name;
});
Route::get('/name/{name}',function($name){
    return "hello " . $name;
})->where('name','[A-Za-z]+');
Route::get('/name/{name}/{nrp}',function($name,$nrp){
    return "hello " . $name . $nrp;
})->where('name','[A-Za-z]+');
