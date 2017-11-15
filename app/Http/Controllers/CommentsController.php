<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	$this->validate(request(), [
    		'body' => 'required|min:2'
    	]);
        
        $user_id = \Auth::user()->id;

    	$post->addComment(request()->input('body'), $user_id);

    	return redirect('/posts/' . $post->id . '#comments');
    }
}
