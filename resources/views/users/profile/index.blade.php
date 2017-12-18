@extends('layouts.no-cover')


@section('content')

<div class="row">
  <div class="col-md-2 avatar-container">
                 <img src="/uploads/avatars/{{ $user->avatar }}" alt="profilbillede" style="width:150px; height:150px; float:left; border-radius:50%;">

                  {!! Form::open(array('url' => '/profile', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'avatar-form')) !!}
                  {!! Form::label('avatar', 'Skift billede', array('class' => 'btn btn-success fileinput-label')) !!}
                  {!! Form::file('avatar', array('class' => 'btn btn-success fileinput')) !!}
                  {!! Form::close() !!}
  </div>

  <div class="col-md-10">
    <h3>{{$user->name}}</h3>
  </div>
</div>

<div class="row">
  <div class="col-md-6">

  </div>

  <div class="col-md-6">

  </div>

</div>










                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script>
                    $('.fileinput').change(function(){
                        $('#avatar-form').submit();
                        console.log('changed');
                    })

                </script>
@endsection
