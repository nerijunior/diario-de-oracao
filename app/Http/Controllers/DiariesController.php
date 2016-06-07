<?php

namespace App\Http\Controllers;

use App\Posts;
use Auth;

class DiariesController extends Controller
{
    public function myDiary()
    {
        $user  = Auth::user();
        $posts = Posts::where('user_id', $user->_id)
            ->get();

        return view('my-diary', compact('posts'));
    }
}
