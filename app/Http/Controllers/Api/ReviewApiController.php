<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReviewApiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Review::query();

        $reviews = $query->get();

        return response()->json($reviews, 200);
    }
}
