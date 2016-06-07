<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;

class PostsControllers extends Controller
{
    public function create()
    {
        return view('posts/create');
    }

    public function save(CreatePostRequest $request)
    {
        $post = new Post();
        $post->fill($request->except('_token'));
        $post->save();

        return redirect('/');
    }
}
