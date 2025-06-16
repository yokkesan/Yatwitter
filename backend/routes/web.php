<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserTweetController::class, 'index'])->name('user.top');