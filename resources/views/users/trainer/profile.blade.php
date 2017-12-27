@extends('layouts.small-cover')

@section('content')

<div class="row profile-header">
  <div class="col-md-4 avatar-container">
                 <img class="profile-picture" src="/uploads/avatars/{{ $user->avatar }}" alt="profilbillede" >

                  {!! Form::open(array('url' => '/profile', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'avatar-form')) !!}
                  {!! Form::label('avatar', 'Skift billede', array('class' => 'btn btn-success fileinput-label')) !!}
                  {!! Form::file('avatar', array('class' => 'btn btn-success fileinput')) !!}
                  {!! Form::close() !!}
  </div>

  <div class="col-md-8">
    <h3 class="black-text text-left" style="margin-top:130px;">{{$user->name}}</h3>
    <h4 class="black-text text-left">Rating: 5 stars</h4>
  </div>


</div>

<div class="row margin-bot-100">
    <div class="col-md-4">
      <div class="row white-bg card">
        <div class="trainer-infobox">
        <h3 class="nopadding black-text text-left">Om mig</h3>
        <hr class="hr-short">
      </div>
      </div>

    </div>
    <div class="col-md-4">
    <div class="row white-bg card">
      <div class="trainer-infobox ">
        <h3 class="nopadding text-left black-text">Uddannelse & Erfaring</h3>
        <hr class="hr-short">
      </div>
    </div>

    </div>
    <div class="col-md-4">
    <div class="row white-bg card">
      <div class="trainer-infobox">
        <h3 class="nopadding text-left black-text">Book mig</h3>
        <hr class="hr-short">
      </div>
    </div>

    </div>
  </div>

  <div class="row margin-bot-100">
  <div class="col-md-12" style="height:400px;">
    <iframe width="100%" height="100%" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIz2AXDxTUkYRuGeU5t1-3QQ&key=AIzaSyCx6Snov6RuTJo9997xOMVYKRSbkjb0T18" allowfullscreen></iframe>
  </div>


  </div>


@endsection
