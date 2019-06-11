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
        {{$pelicula->rating}} - Género: {{$pelicula->genre->name}}</li>
        <p>actores</p>
        <ul>
          {{-- @dd($pelicula->actors); --}}
          @foreach ($pelicula->actors as $actor)
            <li>{{$actor->first_name}} {{$actor->last_name}}</li>

          @endforeach
        </ul>
      @empty
      @endforelse
    </ul>

{{$peliculas->links()}}

  </body>
</html>
