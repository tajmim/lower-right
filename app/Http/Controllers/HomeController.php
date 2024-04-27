<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        return view('sign-in');
    }
    public function newsfeed(){
        return view('dashboard');
    }
    public function profile(){
        $posts = Post::where('user_id',auth()->user()->id)->get();
        // dd($posts);
        return view('profile',compact('posts'));
    }
}
