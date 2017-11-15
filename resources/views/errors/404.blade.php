@extends('layouts.errors')

@section('title')
<title>404 Siden kunne ikke findes</title>
@endsection

@section('content')
    
    @php
    $messages = ['Vi skal bruge et kort', 'Jeg tror vi er faret vild', 'Hvor blev siden af?'];
    
    echo '<h1 style="margin-top:200px; font-size:50px;">';
    echo $messages[mt_rand(0, 2)];
    echo '</h1>'
    @endphp
    
    <h1 style="font-size:250px; color:green; text-shadow: 0px 2px 3px #555;">404</h1>
<h1 style="margin-top:25px; margin-bottom:150px; font-size:40px;">Siden kunne ikke findes :(</h1>

@endsection


