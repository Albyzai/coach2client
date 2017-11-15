<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Gym;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store_user()
    {
    	// Validate the form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|confirmed'
    	]);

    	// Create and save the user
    	$user = User::create([ 
			'name' => request('name'),
			'email' => request('email'),
			'password' => bcrypt(request('password'))
		]);
        $user
            ->roles()
            ->attach(Role::where('name', 'customer')->first());

    	// Sign them in
    	auth()->login($user);

    	// Redirect to the home page
    	return redirect()->home();
    }
    
    
    public function store_trainer()
    {
        
        // Validate the form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|confirmed',
            'experience' => 'required',
            'address' => 'required',
            'zipcode' => 'required'
    	]);

    	// Create and save the user
    	$user = User::create([ 
			'name' => request('name'),
			'email' => request('email'),
			'password' => bcrypt(request('password')),
            'experience' => request('experience'),
            'address' => request('address'),
            'zipcode' => request('zipcode')
            
            
		]);
        
        // Set user role to trainer
        $user
            ->roles()
            ->attach(Role::where('name', 'trainer')->first());
        
        
        // Insert chosen fitness centers
        $fitnessCenters = request('fitnesscenters');
        if(count($fitnessCenters)){
            
        
            foreach($fitnessCenters as $fitnesscenter){
                $user
                    ->gyms()
                    ->attach(Gym::where('name', $fitnesscenter)->first());

            }
            
        }

    	// Sign them in
    	auth()->login($user);
        
        return redirect()->home();
    }
}
