<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    //
    
    public function index(){
        return view('admin.index');
    }
    
    public function posts(){
        $posts = Post::all();
        
        return view ('admin.posts.index', compact('posts'));
    }
}
