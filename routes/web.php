<?php

use Illuminate\Support\Facades\Route;

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
    $data= [
        'links'=>["home","course","job","free-week"]
    ];
    return view('home',$data);
});
Route::get('/course', function () {
    $data= [
        'links'=>["home","course","job","free-week"]
    ];
    return view('course',$data);
});
Route::get('/job', function () {
    $data= [
        'links'=>["home","course","job","free-week"]
    ];
    return view('job',$data);
});
Route::get('/free-week', function () {
    $data= [
        'links'=>["home","course","job","free-week"]
    ];
    return view('freeweek',$data);
});
