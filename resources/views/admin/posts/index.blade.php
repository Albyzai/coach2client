@extends('layouts.admin')

@section('page title')
    <h1 class="page-title">Blogposts</h1>
@endsection

@section('content')

   <div class="table-responsive">
       <table class="table table-striped table-hover">
           <thead>
        <tr>
            <td id="cb"></td>

            <th scope="col" id="title">Titel</th>
            <th scope="col" id="author">Forfatter</th>
            <th scope="col" id="tags">Tags</th>
            <th scope="col" id="comments">Kommentarer</th>
            <th scope="col" id="date">Dato</th>
        </tr>
    </thead>
    <tbody>
	@foreach($posts as $post)
        <tr>
            <td><input type="checkbox"></td>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
            <td>
              @foreach($post->tags as $tag)
                <span class="tag"><i class="glyphicon glyphicon-tags" style="padding-right:10px;"></i>{{$tag->keyword}}</span>
              @endforeach
            </td>
            <td>{{$post->comments()->count()}}</td>
            <td>{{$post->created_at}}</td>
            <td>
            {!! Form::open(array('url' => '/admin/posts/' . $post->id, 'method' => 'delete', 'onsubmit' => 'return confirmDelete()')) !!}
                {!! Form::submit('Slet', array('class' => 'btn btn-danger')) !!}
            {!! Form::close() !!}
            </td>

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
