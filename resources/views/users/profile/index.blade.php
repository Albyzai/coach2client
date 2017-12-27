@extends('layouts.small-cover')


@section('edit-cover')
<label for="" class="button button-white button-minimal edit-cover">Skift coverbillede</label>
@endsection

@section('content')

@if($user->isTrainer())
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
  <aside class="col-md-4 card white-bg">
    <label for="">Navn</label>
    <span class="profile-info">{{ $user->name}}</span>
    <br>
    <br>
    <label for="">Email</label>
    <span class="profile-info">{{ $user->email}}</span>
    <br>
    <br>
    <label for="">Adresse</label>
    <span class="profile-info">{{ $user->address}}</span>
    <br>
    <br>
    <label for="">Postnummer</label>
    <span class="profile-info">{{ $user->zipcode}}</span>
    <br>
    <br>
    <label>Erfaringsniveau</label>
    <span class="profile-info">{{ $user->experience }}</span>
    <br>
    <br>
    <label for="">Medlemskaber</label>
    <ul class="nopadding">
    @foreach($user->gyms as $gym)
      <li>
      <img src="{{$gym->thumbnail}}"  class="fitness-center" alt="">
      </li>
    @endforeach
    </ul>
    <br>
    <a href="" class="green-link text-center">Skift oplysninger</a>
  </aside>
  <div class="col-md-8">
  <div class="row margin-bot-25 card white-bg">
  <div class="col-md-9">
    <h3 class="text-black text-left nopadding">Om mig</h3>
    <hr class="hr-short">
    {{ $user->about}}
  </div>
  <div class="col-md-3">
    <label for="" class="button button-green button-minimal">Rediger <i class="glyphicon glyphicon-edit text-right" style="float:right; line-height: 40px;"></i></label>
  </div>
  </div>
  <div class="row margin-bot-25 card white-bg">
  <div class="col-md-9">
    <h3 class="text-black text-left nopadding">Uddannelse &amp; Erfaring</h3>
    <hr class="hr-short">
    {{ $user->education }}
  </div>
  <div class="col-md-3">
    <label for="" class="button button-green button-minimal">Rediger <i class="glyphicon glyphicon-edit text-right" style="float:right; line-height: 40px;"></i></label>
  </div>
  </div>
  <div class="row margin-bot-25 card white-bg">
      <div class="col-md-9">
        <h3 class="text-black text-left nopadding">Tags</h3>
        <hr class="hr-short">
        @forelse($user->tags as $tag)
                    <span class="tag"><i class="glyphicon glyphicon-tags" style="padding-right:10px;"></i>{{$tag->keyword}}</span>
        @empty
        <p>Tilføj tags til din profil, så det bliver nemmere at finde dig</p>
        @endforelse
      </div>
      <div class="col-md-3">
        <label for="" class="button button-green button-minimal">Rediger <i class="glyphicon glyphicon-edit text-right" style="float:right; line-height: 40px;"></i></label>
      </div>
    </div>
  </div>
</div>
@else

<div class="row">
  <div class="col-md-4 avatar-container">
                 <img src="/uploads/avatars/{{ $user->avatar }}" alt="profilbillede" style="width:200px; height:200px; float:left; border-radius:50%;">

                  {!! Form::open(array('url' => '/profile', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'avatar-form')) !!}
                  {!! Form::label('avatar', 'Skift billede', array('class' => 'btn btn-success fileinput-label')) !!}
                  {!! Form::file('avatar', array('class' => 'btn btn-success fileinput')) !!}
                  {!! Form::close() !!}
  </div>

  <div class="col-md-8">
    <h3>{{$user->name}}</h3>
  </div>
</div>





<div class="row">
  <aside class="col-md-4 card white-bg">
    <label for="">Navn</label>
    <span class="profile-info">{{ $user->name}}</span>
    <br>
    <br>
    <label for="">Email</label>
    <span class="profile-info">{{ $user->email}}</span>
    <br>
    <br>
    <label for="">Adresse</label>
    <span class="profile-info">{{ $user->address}}</span>
    <br>
    <br>
    <label for="">Postnummer</label>
    <span class="profile-info">{{ $user->zipcode}}</span>
    <br>
    <br>
    <label for="">Fitness centre</label>
    <ul class="nopadding">
    @foreach($user->gyms as $gym)
      <li>
      <img src="{{$gym->thumbnail}}"  class="fitness-center" alt="">
      </li>
    @endforeach
    </ul>
    <br>
    <a href="" class="green-link text-center">Skift oplysninger</a>
  </aside>
  <div class="col-md-8"></div>
</div>
@endif






                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script>
                    $('.fileinput').change(function(){
                        $('#avatar-form').submit();
                        console.log('changed');
                    })

                </script>
@endsection
