@extends('layouts.admin')

@section('page title')
    <h1 class="page-title">Brugere</h1>
@endsection

@section('content')

   <div class="table-responsive">
       <table class="table table-striped table-hover">
           <thead>
        <tr>
            <td id="cb"></td>
            
            <th scope="col" id="name">Navn</th>
            <th scope="col" id="email">Email</th>
            <th scope="col" id="role">Role</th>
            <th scope="col" id="date">Oprettet</th>
        </tr>
    </thead>
    <tbody>
	@foreach($users as $user)
        <tr>
            <td><input type="checkbox"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
            
            @foreach($user->roles as $role)
            {{$role->name}}
            @endforeach
            
            </td>
            <td>{{$user->created_at}}</td>
        </tr>
	@endforeach
           </tbody>
       </table>
   </div>
   
   <script>
function confirmDelete() {
    return confirm("Er du sikker på at du vil slette denne post?");
}</script>


@endsection