<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Page;
use App\User;

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
    
    public function pages()
    {
        $pages = Page::all();
        
        return view ('admin.pages.index', compact('pages'));
    }
    
    public function users()
    {
        $users = User::all();
        
        return view('admin.users.index', compact('users'));
    }
}
