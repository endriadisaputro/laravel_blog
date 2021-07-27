@extends('layouts.main')

@section('container')

		<h2>{{$post->title}}</h2>
		<h5>By: <a href="#" class="text-decoration-none">{{$post->user->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></h5>
		
		{!! $post->body !!}

	<a href="/posts">Back to posts</a>
@endsection