<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function showLeaderboard(){
        return view('leaderboard');
    }
}
