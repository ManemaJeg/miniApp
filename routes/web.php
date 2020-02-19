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

Route::get('/sampledata/(count)', function ($count) {
    //return view('welcome');
    echo "you will genarate" . $count . "entries.";
});

Route::get('/test1', function () {
    //return view('welcome');
    echo "you will genarate  entries.";
});