<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');
        $games = DB::select('select * from games');
        $reviews = DB::select('select * from reviews');

        dd($users, $games, $reviews);
        
        return view('index', compact($users, $games, $reviews));
    }
}
