@extends('layouts.master')

@section('content')

	<h1 class="title is-1 text-left">{{ $post->title }}</h1>

	<p class="subtitle">
		By {{ $post->user->name }} |
		{{ $post->created_at->diffForHumans() }}</p>

	<div class="content">
		{{$post->body}}
	</div>

	@include('posts.partials.comments')

@endsection