<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;

class DiariesController extends Controller
{
    public function myDiary()
    {
        $user  = Auth::user();
        $posts = Post::where('user_id', $user->_id)
            ->get();

        return view('my-diary', compact('posts'));
    }
}
