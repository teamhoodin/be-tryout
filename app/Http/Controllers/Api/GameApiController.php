<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GameApiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Game::query();

        $games = $query->get();

        return response()->json($games, 200);
    }
}
