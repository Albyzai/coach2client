<h1 class="title is-one text-left">
	<a href="/posts/{{ $post->id }}" class="green-link">
		{{ $post->title }}
	</a>
</h1>

<p class="subtitle">
	By <a class="green-link" href="/author/{{ $post->user->id }}">{{ $post->user->name }}</a> |
	{{ $post->created_at->diffForHumans() }}</p>

<div class="content">

    {{$post->body}}


</div>