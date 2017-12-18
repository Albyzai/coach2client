


@extends('layouts.admin')


@section('page title')

<h1>Opdater Side</h1>

@endsection

@section('content')
    
    
                {!! Form::open(array('url' => '/admin/pages/'.$page->id, 'method' => 'put')) !!}
                <div class="form-group">
                {!! Form::label('title', 'Titel') !!}
                <br>
                {!! Form::text('title', $page->title) !!}
                
                @if($errors->has('title'))
				  
					<span class="icon is-small">
					    <i class="fa fa-warning"></i>
					</span>

				 	<span class="help is-danger">Der er fejl i dette felt</span>

				@endif
               
                </div>
                <div class="form-group">
                {!! Form::label('content', 'Tekst') !!}
                
                <br>
                {!! Form::textarea('content', $page->content) !!}
                </div>
                @if($errors->has('body'))
					  	<span class="help is-danger">There are errors in this field</span>
					  	<br>
					  	<br>
				@endif
              
              
               <div class="col-md-1 add-post-btn">
                   {!! Form::submit('Opdater', array('class' => 'btn btn-primary')) !!}
               </div>
               
               <div class="col-md-3">
                   @include('partials.errors')
               </div>
                
                
                {!! Form::close() !!}

	

@endsection
