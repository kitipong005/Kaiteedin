<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Post;
use Auth;
use Carbon\Carbon;

class PostController extends Controller
{
    //
    public function postForm()
    {
        return view('post_prop');
    } 

    public function postCreate(Request $request)
    {
        dd($request);
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'name' => 'required|min:3|string',
            'topic' => 'required|min:3|string',
        ]);
        for($i = 0; $i < count($request->image); $i++)
        {
            $filename = $this->resizePic($request->image[$i],500);
            $image[$i] = $filename; 
        }
        $request->image = serialize($image);

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->name = $request->name;
        $post->tel = $request->tel;
        $post->email = $request->email;
        $post->type = $request->type;
        $post->pro = $request->pro;
        $post->prop = $request->prop;
        $post->topic = $request->topic;
        $post->slug = $this->make_slug($request->topic);
        $post->price = $request->price;
        $post->address = $request->address;
        $post->road = $request->road;
        $post->address_name = $request->address_name;
        $post->district = $request->district;
        $post->amphoe = $request->amphoe;
        $post->province = $request->province;
        $post->zipcode = $request->zipcode;
        $post->floor = $request->floor;
        $post->size = $request->size;
        $post->bedroom = $request->bedroom;
        $post->bathroom = $request->bathroom;
        $post->garage = $request->garage;
        $post->nearplace = str_replace("\n", "<br>\n",$request->nearplace);
        $post->description = str_replace("\n", "<br>\n",$request->description);
        $post->image = $request->image;
        $post->exp = Carbon::now()->addMonth()->toDateTimeString();
        $post->save();
        return redirect('/');
    }

    // ------------ slug --------------
    function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
        //-------------- resize pic -------------------
        public function resizePic($request,$imgwidth)
        {
            //dd($request);
            //$file = $request->file('image');
            $file = $request;
            //$imgwidth = 300;
            $folderupload = 'img/home/';
            $filename = time() . $file->getClientOriginalName();
            $filename = str_replace(" ","",$filename);
            $file->move($folderupload, $filename);
            $targetPath = $folderupload . $filename;
            $img = Image::make($targetPath);
            if($img->width()>$imgwidth){
                $img->resize($imgwidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
             }
             $img->save($targetPath);
            return $filename;
        }
}
