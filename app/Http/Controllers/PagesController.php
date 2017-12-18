<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    //
    
    public function create()
    {
        $inputs = Input::all();
        $page = Page::create(array($inputs));
    }
    
    public function show($slug = null)
    {
        
        $page = Page::where('route', $slug)->where('active', true);
        
        $page = $page->firstOrFail();
        
        return view('pages.templates.'.$page->template, compact('page'));
    }
    
    public function update($id){
        
        Page::where('id', $id)->update([
            'title' => request('title'),
            'content' => request('content')
        ]);
        
        return redirect('/admin/pages');
    }
    
    public function edit($id){
        $page = Page::find($id);
        
        return view('admin.pages.edit', compact('page'));
    }
    

        public function destroy($id){
        
        $page = page::find($id);
        $page->delete();
        
        return back();
    }
}
