<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except([
			'index',
			'show'
		]);
	}

    public function index()
    {
    	$posts = Post::all();

    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('admin.posts.create');
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function store()
    {
        
    	// Validation
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);
        
    	auth()->user()->publish(
    		new Post(request([
    			'title',
    			'body'
    		]))
    	);

    	return redirect('/admin/posts');
    }
    
    public function destroy($id){
        
        $post = Post::find($id);
        $post->delete();
        
        return back();
    }
}
