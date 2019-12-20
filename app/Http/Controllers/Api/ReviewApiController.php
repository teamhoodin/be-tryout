<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Review;

class ReviewApiController extends Controller
{
    public function index()
    {
        $query = Review::query();

        $reviews = $query->get();

        return response()->json($reviews, 200);
    }
}
