<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;


class UserController extends Controller
{
    
    public function showPosts()
    {
        // $posts = Posts::where('id', '1')->get();
        $posts = Posts::where('user_id', Auth::user()->id)->get();
                
        return view('dashboard')->with('posts', $posts);
    }
}
