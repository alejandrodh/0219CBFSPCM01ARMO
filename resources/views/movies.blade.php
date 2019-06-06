<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado de peliculas</h1>
    <ul>
      @forelse ($peliculas as $pelicula)
        <li><a href="/movie/{{$pelicula->id}}">{{$pelicula->title}}: </a>
        {{$pelicula->rating}}</li>
      @empty
      @endforelse
    </ul>

{{$peliculas->links()}}

  </body>
</html>
