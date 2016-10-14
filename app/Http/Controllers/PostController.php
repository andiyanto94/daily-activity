<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postCreatePost(Request $request)
    {
	    $this->validate($request, [
		    'body'=>'required|max:1000'
	    ]);
	    $post = new Post();
	    $post->body = $request['body'];
	    $message='there was an error';
	    if ($request->user()->post()->save($post))
	    {
		    $message='success full created post';
	    }
	    return view('dashboard')->with(['message'=>$message]);
    }
}