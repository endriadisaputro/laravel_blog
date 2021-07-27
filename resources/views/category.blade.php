@extends('layouts.main')

@section('container')
  <h1>Category : {{$category}}</h1>
  @foreach ($posts as $post)
    <article class="mb-5">
      <h2>
        <a href="/posts/{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a>
      </h2>
      <h5>By: <a href="#" class="text-decoration-none">{{$post->user->name}}</a></h5>
      <p>{{$post->excerpt}}</p>
    </article>
  @endforeach
@endsection

