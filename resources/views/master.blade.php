<?php
  //include_once "funciones.php";
  //var_dump($_SESSION);
  // include_once 'init.php';
  //
  // if(isset($_SESSION["email"])){
  //   $usuario = $dbMysql->buscarPorEmail($_SESSION["email"]);
  // } //transformarlo a función traerUsuarioLogueado() como método de la db;
  // var_dump($usuario);
  // exit;
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="container @yield('class')">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <?php if (false): ?>
              <img class="avatar" src="<?= 'img/'. $usuario->getEmail(). '.jpg' ?>" alt="">
              <span><?= $usuario->getEmail() ?></span>
            <?php else: ?>
              <a class="btn btn-warning" href="/register">Signup</a>
            <?php endif; ?>

          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <?php if (false): ?>
              <a class="btn btn-danger" href="logout.php">Logout</a>
            <?php else: ?>
              <a class="btn btn-success" href="/login">Login</a>
            <?php endif; ?>
          </div>
        </div>
      </header>

      @yield('main')


    @section('footer')
    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
  @show  {{-- Crear una sección y finalizarla con @show permite sobre escribirla o agregarle info en las vistas que la extienden. --}}

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
