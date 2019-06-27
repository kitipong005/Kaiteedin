<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PropertyController extends Controller
{
    //
    public function viewProp(Request $request)
    {
        $post = Post::where('id', '=', $request->id)->first();
        return view('view_prop', compact('post'));
    }
}
