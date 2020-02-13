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
use App\Image;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function(){
    $images = Image::all();
    foreach ($images as $image) {
        var_dumps($image);
    }
    die();

    return view('welcome');
});
