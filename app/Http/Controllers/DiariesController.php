<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;

class DiariesController extends Controller
{

    public function getUserPosts($user)
    {
        return Post::where('user_id', $user->_id)
            ->orderBy('date', 'desc')
            ->get();
    }

    public function myDiary()
    {
        $user  = Auth::user();
        $posts = $this->getUserPosts($user);
        return view('my-diary', compact('posts'));
    }

    public function share()
    {
        $user   = Auth::user();
        $config = (isset($user->config)) ? $user->config : [];

        $url = '';
        if (isset($config['share_link']) && $config['share_link']) {
            $url = $this->genShareLink($user);
        }

        return view('diaries.share', compact('config', 'url'));
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

        return json_encode(array_merge($user->config, [
            'link' => $this->genShareLink($user),
        ]));
    }

    public function sharedSee($id)
    {
        $user = User::select(['name', 'config'])
            ->find($id);

        if (!isset($user->config['share_link']) || !$user->config['share_link']) {
            abort(404);
        }

        $posts = $this->getUserPosts($user);

        return view('shared.diaries.list', compact('user', 'posts'));
    }

    private function genShareLink($user)
    {
        return route('shared.diaries.see', ['id' => $user->id]);
    }
}
