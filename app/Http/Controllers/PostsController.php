<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Auth;
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
			$tags = Tag::all();

    	return view('admin.posts.create', compact('tags'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function store()
    {

			$user = Auth::user();
    	// Validation
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

			$post = Post::create([
				'title' => request('title'),
				'body' => request('body'),
				'user_id' => $user->id,
			]);

			$post->tags()->sync(request('tags'), false);


    	return redirect('/admin/posts');
    }

    public function destroy($id){

        $post = Post::find($id);
        $post->delete();

        return back();
    }
}
