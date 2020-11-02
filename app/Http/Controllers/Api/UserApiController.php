<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = User::query();

        $users = $query->get();

        return response()->json($users, 200);
    }
}
