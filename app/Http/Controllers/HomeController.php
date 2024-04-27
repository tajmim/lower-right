<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('sign-in');
    }
    public function newsfeed(){
        return view('dashboard');
    }
    public function profile(){
        return view('profile');
    }
}
