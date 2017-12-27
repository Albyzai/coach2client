<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Client;

class TrainersController extends Controller
{

    //
    public function index()
    {

        //
        $trainers = User::whereHas('roles', function ($query) {
            $query->where('name', 'trainer');
        })->get();


        return view('layouts.trainers', compact('trainers'));

    }

    public function profile(User $user){
        return view('users.trainer.profile', compact('user'));
    }

    public function search(){

        $query = request()->search;


        return Geocoder::getCoordinatesForAddress('Infinite Loop 1, Cupertino');



    }

    public function test(){
        $client = new Client();

        $body = $client->post('https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyCx6Snov6RuTJo9997xOMVYKRSbkjb0T18')->getBody();

        $result = json_decode($body);

        $lat = $result->location->lat;
        $lng = $result->location->lng;


        $place = app('geocoder')->reverse($lat,$lng)->get();
        return dd($place);


    }
}
