<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Auth;
use Cache;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()
                ->route('my-diary');
        }

        if (Cache::has('welcome.totals')) {
            $totals = Cache::get('welcome.totals');
        } else {
            $totals = Cache::remember('welcome.totals', 60, function () {
                $totals                = new \StdClass;
                $totals->users         = User::count();
                $totals->diaries       = Post::count();
                $totals->prayers       = Post::where('questions.where_i_pray', '<>', '')->count();
                $totals->god_responses = Post::where('questions.god_speak', '<>', '')->count();
                return $totals;
            });
        }

        return view('welcome', compact('totals'));
    }
}
