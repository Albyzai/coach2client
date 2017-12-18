@extends('layouts.admin')

@section('page title')
    <h1 class="page-title">Sider</h1>
@endsection

@section('content')

   <div class="table-responsive">
       <table class="table table-striped table-hover">
           <thead>
        <tr>
            <td id="cb"></td>
            
            <th scope="col" id="title">Titel</th>
            <th scope="col" id="author">Slug</th>
            <th scope="col" id="template">Skabelon</th>
            <th scope="col" id="status">Status</th>
        </tr>
    </thead>
    <tbody>
	@foreach($pages as $page)
        <tr>
            <td><input type="checkbox"></td>
            <td>{{$page->title}}</td>
            <td>/{{$page->route}}</td>
            <td>{{$page->template_name}}</td>
            <td>
            @if($page->active)
                {{'Aktiv'}}
            @else
                {{'Inaktiv'}}
            @endif
            
            </td>
            <td>
                <a style="display:inline-block;" class=" btn btn-warning" href="/admin/pages/{{$page->id}}">Edit</a>

                {!! Form::open(array('url' => '/admin/pages/' . $page->id, 'method' => 'delete', 'onsubmit' => 'return confirmDelete()', 'style' => 'display:inline-block;')) !!}
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