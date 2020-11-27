<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Posts;
use App\Models\User;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Posts::with('user')->get();

        return view('home')->with('posts', $posts);
    }

    public function newPost()
    {
        return view('profile.new-post');
    }

    public function advancedSearch()
    {
        return view('advanced-search');
    }
}
