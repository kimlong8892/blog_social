<?php

namespace App\Http\Controllers\front_end;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile(Request $request)
    {
        $user = Auth::user();
        return view('front_end.user.profile', compact('user'));
    }
}
