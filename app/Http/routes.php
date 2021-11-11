<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
   return view('pages/about');
});

Route::get('siswa', function (){
   $siswa = ['Nico Lahara', 'Afiifah Ramadhani','Safira Annisa'];
    return view('siswa.index', compact('siswa'));
});
