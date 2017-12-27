@extends('layouts.small-cover')

@section('content')

	@foreach($posts as $post)

		<div class="box is-shadowless has-no-h-padding">

			@include('posts.partials.post')

		</div>
        <hr>

	@endforeach



@endsection