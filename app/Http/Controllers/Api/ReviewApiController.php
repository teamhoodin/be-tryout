<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Review;

class ReviewApiController extends Controller
{
    public function index()
    {
        return response()->json(Review::all(), 200);
    }
}
