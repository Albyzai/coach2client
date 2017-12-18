@extends('layouts.session')

@section('title')

@endsection

@section('content')



<div class="row login-row">
 <!--  <div class="col-md-6">
      <h3 style="margin-top:150px;">Registrer bruger</h3>
       <div class="card">
          <div class="card-block">
            @include('partials.errors')
           
            {!! Form::open(['url' => '/register', 'method' => 'post']) !!}
            
            <div class="form-group">
            {!! Form::label('name', 'Navn') !!}
            <br>
            {!! Form::text('name', null, ['class' => "{{ $errors->has('email') ? 'is-danger' : '' }} form-control" ]) !!}
            </div>
            
            <div class="form-group">
            
            
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
            {!! Form::label('password', 'Gentag kodeord') !!}
            <br>
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>
            
            
            <div class="form-group">
            {!! Form::submit('Opret brugerprofil', ['class' => 'form-control form-submit']) !!}
            </div>
            {!! Form::close() !!}
            
            
       </div>
    </div>
   </div>   
</div>-->


   <div class="col-md-12">
      <h3 style="margin-top:150px;">Registrer Træner</h3>
       <div class="card col-md-12">
          <div class="card-block">
           <div class="col-md-6">
            @include('partials.errors')
           
            {!! Form::open(['url' => '/register/trainer', 'method' => 'post']) !!}
            
            <div class="form-group">
            {!! Form::label('name', 'Navn') !!}
            <br>
            {!! Form::text('name', null, ['class' => "{{ $errors->has('email') ? 'is-danger' : '' }} form-control" ]) !!}
            </div>
            
            <div class="form-group">
            
            

            
            <div class="form-group">
            {!! Form::label('experience', 'Erfaring med personlig træning') !!}
            <br>
            {!! Form::select('experience', ['Lidt' => 'Lidt', 'Mellem' => 'Mellem', 'Meget' => 'Meget'], null, ['placeholder' => 'Vælg erfaring', 'class' => " form-control" ]) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('address', 'Adresse') !!}
            <br>
            {!! Form::text('address', null, ['class' => " form-control" ]) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('zipcode', 'Postnr') !!}
            <br>
            {!! Form::number('zipcode', null, ['class' => 'form-control', 'name' => 'zipcode' ]) !!}
            </div>
            
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
            {!! Form::label('password', 'Gentag kodeord') !!}
            <br>
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>
            
            
            <div class="form-group">
            {!! Form::submit('Opret Trænerprofil', ['class' => 'form-control form-submit']) !!}
            </div>
            
            
            
       </div>
    </div>
    
    <div class="col-md-6 fitness-list">
    
        <ul>
          <li class="center-thumbnail">
           {!! Form::checkbox('fitnesscenters[]', 'fitnessworld', false, ['class' => 'checkbox-center', 'id' => 'fitnessworld']) !!}
           {!! Form::labelWithImage('fitnessworld','media/fitnessworld.png', 'fitness-label') !!}
          </li >
          <li class="center-thumbnail">
           {!! Form::checkbox('fitnesscenters[]', 'fitnessdk', false, ['class' => 'checkbox-center', 'id' => 'fitnessdk']) !!}
           {!! Form::labelWithImage('fitnessdk','media/fitnessdk.png', 'fitness-label') !!}
          </li>
          <li class="center-thumbnail">
           {!! Form::checkbox('fitnesscenters[]', 'freshfitness', false, ['class' => 'checkbox-center', 'id' => 'freshfitness']) !!}
           {!! Form::labelWithImage('freshfitness','media/freshfitness.png', 'fitness-label') !!}
          </li >
          <li class="center-thumbnail">
           {!! Form::checkbox('fitnesscenters[]', 'cfc', false, ['class' => 'checkbox-center', 'id' => 'cfc']) !!}
           {!! Form::labelWithImage('cfc','media/cfc.png', 'fitness-label') !!}
          </li>
          <li class="center-thumbnail">
           
           {!! Form::checkbox('fitnesscenters[]', 'urbangym', false, ['class' => 'checkbox-center', 'id' => 'urbangym']) !!}
           {!! Form::labelWithImage('urbangym','media/urbangym.png', 'fitness-label') !!}
          </li>
    </ul>
    {!! Form::close() !!}
    </div>
    </div>
   </div>   
</div>
</div>
	
@endsection