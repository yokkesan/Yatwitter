<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tweet;

class TweetController extends Controller
{
     public function index()
    {
        $tweets = Tweet::with('user')->latest()->get();

        return Inertia::render('user/TopPage', [
            'tweets' => $tweets
        ]);
    }
}
