<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserApiController extends Controller
{
    public function index()
    {
        $query = User::query();

        $users = $query->get();

        return response()->json($users, 200);
    }
}
