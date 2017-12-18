


@extends('layouts.admin')


@section('page title')

<h1>Lav en ny blog post</h1>

@endsection

@section('content')
    
    
                {!! Form::open(array('url' => '/admin/posts/', 'method' => 'post')) !!}
                <div class="form-group">
                {!! Form::label('title', 'Titel') !!}
                <br>
                {!! Form::text('title') !!}
                
                @if($errors->has('title'))
				  
					<span class="icon is-small">
					    <i class="fa fa-warning"></i>
					</span>

				 	<span class="help is-danger">Der er fejl i dette felt</span>

				@endif
               
                </div>
                <div class="form-group">
                {!! Form::label('body', 'Tekst') !!}
                
                <br>
                {!! Form::textarea('body') !!}
                </div>
                @if($errors->has('body'))
					  	<span class="help is-danger">There are errors in this field</span>
					  	<br>
					  	<br>
				@endif
              
              
               <div class="col-md-1 add-post-btn">
                   {!! Form::submit('Tilføj', array('class' => 'btn btn-primary')) !!}
               </div>
               
               <div class="col-md-3">
                   @include('partials.errors')
               </div>
                
                
                {!! Form::close() !!}

	<!--<form action="/admin/posts" method="POST">

				{{ csrf_field() }}
                
                
                
				<label class="label" for="title">Title</label>
				<p class="control {{ $errors->has('title') ? 'has-icon has-icon-right' : '' }}">
				  <input class="input {{ $errors->has('title') ? 'is-danger' : '' }} col-md-6" type="text" id="title" name="title">

				  @if($errors->has('title'))
				  
					<span class="icon is-small">
					    <i class="fa fa-warning"></i>
					</span>

				 	<span class="help is-danger">There are errors in this field</span>

				  @endif
				</p>

				<label class="label" for="body">Content</label>
				<p class="control">
					<textarea class="textarea {{ $errors->has('title') ? 'is-danger' : '' }} col-md-12" name="body" id="body"></textarea>

					@if($errors->has('body'))
					  	<span class="help is-danger">There are errors in this field</span>
					@endif
				</p>


				<p class="control">
					<button type="submit" class="button is-primary">Publish</button>
				</p>				


	</form>-->

	

@endsection
