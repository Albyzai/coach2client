@extends('layouts.admin')

@section('page title')
    <h1 class="page-title">Tags</h1>
@endsection

@section('content')

   <div class="table-responsive">
       <table class="table table-striped table-hover">
           <thead>
        <tr>
            <td id="cb"></td>
            
            <th scope="col" id="id">Id</th>
            <th scope="col" id="tag">Tag</th>
        </tr>
    </thead>
    <tbody>
	@foreach($tags as $tag)
        <tr>
            <td><input type="checkbox"></td>
            <td>{{$tag->id}}</td>
            <td>{{$tag->keyword}}</td>
            
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