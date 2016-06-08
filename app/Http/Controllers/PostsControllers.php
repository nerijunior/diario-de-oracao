<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use Auth;

class PostsControllers extends Controller
{

    public function create()
    {
        return view('posts/create');
    }

    public function save(CreatePostRequest $request)
    {
        $user = Auth::user();

        $post = new Post();
        $post->fill($request->except('_token'));
        $post->user_id = $user->_id;
        $post->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $user = Auth::user();

        $post = Post::where(['user_id' => $user->id])
            ->find($id);

        if (!$post) {
            return redirect('/');
        }

        return view('posts/create', compact('post'));
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $user = Auth::user();

        $post = Post::find($id);
        $post->update($request->except(['_token', '_method']));

        return redirect('/');
    }
}
