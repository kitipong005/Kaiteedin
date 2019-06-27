<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PropertyController extends Controller
{
    //
    public function viewProp(Request $request)
    {
        $this->viewUpdate($request->id);
        $post = Post::where('id', '=', $request->id)->first();
        return view('view_prop', compact('post'));
    }



    //----- update view -----
    public function viewUpdate($id)
    {
        $view = Post::find($id);
        $count = $view->count + 1;
        $view->count = $count;
        $view->save();
    }
}
