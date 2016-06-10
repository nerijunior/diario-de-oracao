<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;

class DiariesController extends Controller
{
    public function myDiary()
    {
        $user  = Auth::user();
        $posts = Post::where('user_id', $user->_id)
            ->get();

        return view('my-diary', compact('posts'));
    }

    public function share()
    {
        $user   = Auth::user();
        $config = (isset($user->config)) ? $user->config : [];

        return view('diaries.share', compact('config'));
    }

    public function saveShare(Request $request)
    {
        $user = Auth::user();

        $share_link = $request->share_link;

        $user->update([
            'config' => [
                'share_link' => (1 == $share_link),
            ],
        ]);

        dd($user->toArray());

    }

    public function seeShared()
    {
        dd('tes');
    }
}
