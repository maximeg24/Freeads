<?php

Route::get('/', function () {
    return view('my_project');
})->name('my_project');

Route::get('layouts', function () {
    return view('layouts/app');
});

Route::get('CGU', function () {
    URL::asset('assets/pdf/CGU.pdf');
});

Route::get('CGV', function () {
    URL::asset('assets/pdf/CGV.pdf');
});

Route::get('right_obligation', function () {
    URL::asset('assets/pdf/right_obligation.pdf');
});

Route::get('cookies', function () {
    URL::asset('assets/pdf/cookies.pdf');
});

Route::get('checkout', function () {
    URL::asset('assets/checkout/index.html');;
});

Route::get('employment', function () {
    URL::asset('assets/employment/index.html');;
});

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Route::resource('products','ProductController');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/annonce', 'AdController@create')->name('ad.create');
Route::post('/annonce/create', 'AdController@store')->name('ad.store');
Route::get('/search','ProductController@search');

Route::get('/admin', function(){
    return 'You are Admin';
})->middleware(['auth', 'auth.admin']);

Route::get('bar', 'SearchController@index')->name('search');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

Route::get('Not_work', function () {
    URL::asset('assets/Not_work/index.html');;
});