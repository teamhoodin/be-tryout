<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\User;

class UserController extends Controller
{
    public function user(User $user)
    {
        return view('welcome', compact('user'));
    }
}
