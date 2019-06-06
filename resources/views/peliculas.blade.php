@extends('welcome') {{-- Paso3 Vista relacionada --}}

@section('peliculas') {{-- Paso1 crear sección --}}
      <h1>Listado de peliculas</h1>
      <ul>
        @foreach($peliculas as $pelicula)

          @unless($pelicula == "The Mule")
          <li>{{$pelicula}}</li>
          @endunless

        @endforeach
      </ul>
@endsection
