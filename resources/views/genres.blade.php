<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado de peliculas</h1>
    <ul>
      @forelse ($genres as $genre)
        <li>{{$genre->name}}</li>
        {{-- @dd($genre->movies); --}}

        {{-- <ul>
        @foreach ($genre->movies as $movie)
          <li>{{$movie->title}}</li>
        @endforeach
        </ul> --}}
      @empty
      @endforelse
    </ul>

  </body>
</html>
