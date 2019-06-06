
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Buscador</h1>
    <form class="" action="/actores/buscar" method="get">
      <input type="text" name="search" value="" placeholder="Buscar...">
      <button type="submit">Buscar</button>

    </form>
    <form class="" action="/actores" method="get">
      <button type="submit">Limpiar</button>
    </form>
    <h1>Listado de actores con nombreCompleto()</h1>
    <ul>
    @forelse($actors as $actor)
      <li><a href="/actor/{{$actor->id}}">{{$actor->getNombreCompleto()}} </a></li>
    @empty
    @endforelse
    </ul>
    @if (isset($_GET['search']))
    {{$actors->links()}}  
    @endif

  </body>
</html>
