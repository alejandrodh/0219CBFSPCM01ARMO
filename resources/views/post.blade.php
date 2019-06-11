@extends('master')

@section('title', $post->title) {{-- Versión corta solo para textos breves --}}

@section('class')
no-navbar
@endsection

@section('main')
<article class="">
  <h2>{{$post->title}}</h2>
  <p>id:{{$post->id}} </p>
  <img src="/storage/posts/{{$post->featured_img}}" alt="">
  <p>{{$post->excerpt}}</p>
  <p>{{$post->content}}</p>

</article>

{{-- Borrar un elemento --}}
<form action="/deletepost" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$post->id}}">
  <button type="submit">Borrar post</button>
</form>

@endsection
