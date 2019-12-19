<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;

class GameApiController extends Controller
{
    public function index()
    {
        return response()->json(Game::all(), 200);
    }
}
