<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;

class GameApiController extends Controller
{
    public function index()
    {
        $query = Game::query();

        $games = $query->get();

        return response()->json($games, 200);
    }
}
