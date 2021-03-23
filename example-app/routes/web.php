<?php


Route::get('/', function () {

    dump(DB::select('SELECT * FROM posts'));
});
Route::get('about', function () {

    return view('pages/about');
});
