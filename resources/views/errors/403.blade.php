@extends('layouts.errors')

@section('title')
<title>403 Begrænset adgang</title>
@endsection

@section('content')
    
    @php
    $messages = ['Du er vist gået forkert', 'Græsset må ikke betrædes', "Dørvagten vil ikke lukke dig ind"];
    
    echo '<h1 style="margin-top:200px; font-size:50px;">';
    echo $messages[mt_rand(0, 2)];
    echo '</h1>'
    @endphp
    
    <h1 style="font-size:250px; color:green; text-shadow: 0px 2px 3px #555;">403</h1>
<h1 style="margin-top:25px; margin-bottom:150px; font-size:40px;">Adgang nægtet</h1>

@endsection

