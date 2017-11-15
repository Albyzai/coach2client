@extends('layouts.session')

@section('title')

@endsection

@section('content')

<h3 style="margin-top:150px;">Login</h3>

<div class="row login-row">
   <div class="col-md-6 col-md-offset-3">
       <div class="card">
          <div class="card-block">
            @include('partials.errors')
           
            {!! Form::open(['url' => '/login', 'method' => 'post']) !!}
            <div class="form-group">
            {!! Form::label('email', 'Email Adresse') !!}
            <br>
            {!! Form::email('email', null, ['value' => "{{ old('email') }}", 'class' => "{{ $errors->has('email') ? 'is-danger' : '' }} form-control" ]) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('password', 'Kodeord') !!}
            <br>
            {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::submit('Login', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
            
            
       </div>
    </div>
   </div>
    
</div>
	
@endsection





	<!--<form action="/login" method="POST">

		{{ csrf_field() }}

		<label class="label" for="email">E-mail</label>
		<p class="control {{ $errors->has('email') ? 'has-icon has-icon-right' : '' }}">
		  <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}">

		  @if($errors->has('email'))
			<span class="icon is-small">
			    <i class="fa fa-warning"></i>
			</span>

		 	<span class="help is-danger">There are errors in this field</span>

		  @endif
		</p>

		<label class="label" for="password">Password</label>
		<p class="control {{ $errors->has('password') ? 'has-icon has-icon-right' : '' }}">
		  <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" id="password" name="password">

		  @if($errors->has('password'))
			<span class="icon is-small">
			    <i class="fa fa-warning"></i>
			</span>

		 	<span class="help is-danger">There are errors in this field</span>

		  @endif
		</p>

		<p class="control">
			<button type="submit" class="button is-primary">Login</button>
		</p>

	</form>-->