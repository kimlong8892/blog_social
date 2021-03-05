<?php

namespace App\Http\Controllers\front_end;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Index(Request $request){
        $listPost = \App\Post::paginate(12);

        return view('front_end.home', compact('listPost'));
    }
}
