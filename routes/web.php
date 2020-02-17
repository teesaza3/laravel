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

Route::get('/home/',function () {
    return view('home.index');

})->name('home');

Route::get('/shinkanzen/',function () {
    $name = 'Shinkanzen Sushi';
    return view('page.shinkanzen',['name'=> $name]);
    // return view('greeting',compact('message', 'name'));
})->name('shinkanzen');

Route::get('/pop/',function () {
    $name = 'Pop Steakhouse';
    return view('page.pop',['name'=> $name]);
})->name('Pop');

Route::get('/gorilla/',function () {
    $name = 'Gorilla Grill';
    return view('page.gorilla',['name'=> $name]);
})->name('gorilla');
