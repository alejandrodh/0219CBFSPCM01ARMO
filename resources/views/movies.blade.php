<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/peliculas.js"></script>
  </head>
  <body>
    <h1>Listado de peliculas</h1>
    <h2 style="display:none">HAY PELIS NUEVAS, CLICKEA ACA</h2>
    <ul class="listadoPeliculas">
      
      @forelse ($peliculas as $pelicula)
<<<<<<< HEAD

        {{-- @dd($peliculas) --}}
        <li><a href="/movie/{{$pelicula->id}}">{{$pelicula->title}}: </a>
        {{$pelicula->rating}} - Género: {{$pelicula->genre->name}}</li>
=======
        <li class="movie"><a href="/movie/{{$pelicula->id}}">{{$pelicula->title}}: </a>
        {{$pelicula->rating}}</li>
>>>>>>> a662e6c5f55f622341486fcbdfafdad44071933a
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



  </body>
</html>
