@extends('master')

@section('title', 'Login') {{-- Versión corta solo para textos breves --}}

@section('class', 'no-navbar')

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
  <h3 class="col-md-6 offset-md-3">Login</h3>
</div>
<div class="row">
  <form class="col-md-6 offset-md-3" action="login.php" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- {{csrf_field()}} --}}
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" id="email" class="form-control" placeholder="email" name="email" value="">
      <span class="small text-danger"></span>
    </div>
    <div class="form-group">
      <label for="pass">Password</label>
      <input type="password" id="pass" class="form-control" placeholder="Password" name="pass" value="">
      <span class="small text-danger"></span>
    </div>

  <button class="btn btn-info" type="submit">Send</button>
  </form>
</div>
@endsection

@section('footer', '');
