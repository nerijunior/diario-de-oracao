<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;

class PostsControllers extends Controller
{
    public function create()
    {
        return view('posts/create');
    }

    public function save(CreatePostRequest $request)
    {

    }
}
