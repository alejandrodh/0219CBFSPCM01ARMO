@extends('master')

@section('title', 'New Post') {{-- Versión corta solo para textos breves --}}

@section('class')
no-navbar
@endsection


@section('main')

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">World</a>
      <a class="p-2 text-muted" href="#">U.S.</a>
      <a class="p-2 text-muted" href="#">Technology</a>
      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Culture</a>
      <a class="p-2 text-muted" href="#">Business</a>
      <a class="p-2 text-muted" href="#">Politics</a>
      <a class="p-2 text-muted" href="#">Opinion</a>
      <a class="p-2 text-muted" href="#">Science</a>
      <a class="p-2 text-muted" href="#">Health</a>
      <a class="p-2 text-muted" href="#">Style</a>
      <a class="p-2 text-muted" href="#">Travel</a>
    </nav>
  </div>

  <div class="row">
    <h3 class="col-md-6 offset-md-3">New Post</h3>
  </div>
  <div class="row">
    <form class="col-md-6 offset-md-3" action="/newpost" method="POST" enctype="multipart/form-data">
      <ul>
        @foreach ($errors->all() as $error)
          @dd($errors->all())
          <li>{{$error}}</li>
        @endforeach
      </ul>
      @csrf
      {{-- {{csrf_field()}} --}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" class="form-control" placeholder="Title" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
      <label for="excerpt">Excerpt</label>
      <input type="text" id="excerpt" class="form-control" placeholder="Excerpt" name="excerpt" value="">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea rows="6" id="content" class="form-control" placeholder="Content" name="content" value=""></textarea>
    </div>
    <div class="form-group">
      <label for="featured-image">Fuatured Image</label>
      <input type="file" id="featured-image" class="form-control" name="featured-image" value="">
    </div>

    <button class="btn btn-info" type="submit" >Guardar</button>
    </form>
  </div>

</div>

@endsection
@section('footer', '') {{-- Agregamos la sección vacía para que no muestre footer en el registro. Solo funcionará si en master declaramos la sección y la cerramos con @show --}}
