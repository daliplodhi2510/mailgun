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
    return view('welcome');
});

Route::get('send-mail', function(){
    
    $details = [
        'title' => 'Mail from RainChambers',
        'body' => 'This is for testing mail using mailgun'
    ];
    
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\SendMyMail($details));
    dd('Email is sent.');
});