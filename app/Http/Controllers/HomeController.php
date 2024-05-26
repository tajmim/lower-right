<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('sign-in');
    }
    public function newsfeed()
    {
        return view('dashboard');
    }
    public function profile()
    {

        $posts = Post::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        // dd($posts);
        return view('profile', compact('posts'));
    }
    public function edit_profile()
    {
        return view('edit_profile');
    }

    public function search(Request $request)
    {
        $users = User::where('name', 'like', '%' . $request->q . '%')->get();

        return view('user_search_result', compact('users'));
    }
}
