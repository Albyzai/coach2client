<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use Image;

class UserController extends Controller
{
    //
    
    public function index(){
        $user = Auth::user();
        return view('users.profile.index', compact('user'));
        
    }
    
    public function update_avatar(Request $request){
        
        //Handle user upload of avatar
        if($request->hasFile('avatar')){
            $user = Auth::user();
            
            $avatar = $request->file('avatar');
            $filename = $user->id . '_' . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename, 50));
            
            
            $user->avatar = $filename;
            $user->save();
        }
        return view('users.profile.index', compact('user'));
    }
}
