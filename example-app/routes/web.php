<?php


Route::get('/', function () {
    $isWeekend = date('N') >= 1;
    $name = 'joel jt';
    return view('welcome', compact('name', 'isWeekend'));
});
Route::get('about', function () {

    return view('pages/about');
});
