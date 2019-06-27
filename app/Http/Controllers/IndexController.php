<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    //
    public function index()
    {
        $posts = Post::where('email','=','aamhkm@gmail.com')->get();
        return view('index',compact('posts'));
    }
}
