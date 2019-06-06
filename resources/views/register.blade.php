@extends('master')

@section('title', 'Register') {{-- Versión corta solo para textos breves --}}

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
    <h3 class="col-md-6 offset-md-3">Signup</h3>
  </div>
  <div class="row">
    <form class="col-md-6 offset-md-3" action="register.php" method="POST" enctype="multipart/form-data">
  <?php if(isset($errores["name"])):?>
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" id="name" class="form-control" placeholder="Nombre" name="name" value="">
      <span class="small text-danger"><?= $errores["name"] ?></span>
    </div>
  <?php else: ?>
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" id="name" class="form-control" placeholder="Nombre" name="name" value="">
      <span class="small"></span>
    </div>
  <?php endif; ?>

    <h6 class="mt-3">Género</h6>
    <div class="form-check form-check-inline">
    <?php if (isset($_POST["gender"]) && $_POST["gender"] == "masc"): ?>
      <input class="form-check-input" name="gender" type="radio" id="inlineRadio1" value="masc" checked>
    <?php else: ?>
      <input class="form-check-input" name="gender" type="radio" id="inlineRadio1" value="masc">
    <?php endif; ?>
      <label class="form-check-label" for="inlineRadio1">Masculino</label>
    </div>
    <div class="form-check form-check-inline">
    <?php if (isset($_POST["gender"]) && $_POST["gender"] == "fem"): ?>
      <input class="form-check-input" name="gender" type="radio" id="inlineRadio2" value="fem" checked>
    <?php else: ?>
      <input class="form-check-input" name="gender" type="radio" id="inlineRadio2" value="fem">
    <?php endif; ?>
      <label class="form-check-label" for="inlineRadio2">Femenino</label>
    </div>
    <div class="form-check form-check-inline">
    <?php if (isset($_POST["gender"]) && $_POST["gender"] == "other"): ?>
      <input class="form-check-input" name="gender" type="radio" id="inlineRadio3" value="other" checked>
    <?php else: ?>
      <input class="form-check-input" name="gender" type="radio" id="inlineRadio3" value="other">
    <?php endif ?>
      <label class="form-check-label" for="inlineRadio3">Prefiero no decirlo</label>
    </div>
    <?php if (isset($errores["gender"])):?>
      <div class="form-group">
        <span class="small text-danger"><?= $errores["gender"] ?></span>
      </div>
    <?php endif ?>

    <h6 class="mt-3">Hobbies</h6>
    <div class="form-check form-check-inline">
    <?php if(isset($_POST["hobbies"]) && isset($_POST["hobbies"]["sports"])):?>
      <input class="form-check-input" name="hobbies[sports]" type="checkbox" id="inlineCheckbox1" value="sports" checked>
    <?php else: ?>
      <input class="form-check-input" name="hobbies[sports]" type="checkbox" id="inlineCheckbox1" value="sports">
    <?php endif ?>
      <label class="form-check-label" for="inlineCheckbox1">Deportes</label>
    </div>

    <div class="form-check form-check-inline">
    <?php if(isset($_POST["hobbies"]) && isset($_POST["hobbies"]["music"])):?>
      <input class="form-check-input" name="hobbies[music]" type="checkbox" id="inlineCheckbox2" value="music" checked>
    <?php else: ?>
      <input class="form-check-input" name="hobbies[music]" type="checkbox" id="inlineCheckbox2" value="music">
    <?php endif ?>
      <label class="form-check-label" for="inlineCheckbox2">Música</label>
    </div>

    <div class="form-check form-check-inline">
    <?php if(isset($_POST["hobbies"]) && isset($_POST["hobbies"]["programming"])):?>
      <input class="form-check-input" name="hobbies[programming]" type="checkbox" id="inlineCheckbox3" value="programming" checked>
    <?php else: ?>
      <input class="form-check-input" name="hobbies[programming]" type="checkbox" id="inlineCheckbox3" value="programming">
    <?php endif ?>
      <label class="form-check-label" for="inlineCheckbox3">Programación</label>
    </div>
    <?php if (isset($errores["hobbies"])):?>
      <div class="form-group">
        <span class="small text-danger"><?= $errores["hobbies"] ?></span>
      </div>
    <?php endif ?>


    <?php if (isset($errores["email"])): ?>
      <div class="form-group">
        <label for="email">email</label>
        <input type="email" id="email" class="form-control" placeholder="email" name="email" value="">
        <span class="small text-danger"><?= $errores["email"]?></span>
      </div>
    <?php else: ?>
      <div class="form-group">
        <label for="email">email</label>
        <input type="email" id="email" class="form-control" placeholder="email" name="email" value="">
      </div>
    <?php endif; ?>

    <?php if (isset($errores["pass"])): ?>
      <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" id="pass" class="form-control" placeholder="Password" name="pass" value="">
        <span class="small text-danger"><?= $errores["pass"] ?></span>
      </div>
      <div class="form-group">
        <label for="pass2">Reescribir contraseña</label>
        <input type="password" id="pass2" class="form-control" placeholder="Repita su contraseña" name="pass2" value="">
        <span class="small text-danger"><?= $errores["pass"] ?></span>
      </div>
    <?php else: ?>
      <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" id="pass" class="form-control" placeholder="Password" name="pass" value="">
        <span class="small text-danger"></span>
      </div>
      <div class="form-group">
        <label for="pass2">Reescribir contraseña</label>
        <input type="password" id="pass2" class="form-control" placeholder="Repita su contraseña" name="pass2" value="">
        <span class="small text-danger"></span>
      </div>
    <?php endif; ?>

    <div class="form-group">
      <label for="avatar">Imagen de perfil</label>
      <input type="file" id="avatar" class="form-control" name="avatar">
      <?php if (isset($errores["avatar"])): ?>
        <span class="small text-danger"><?= $errores["avatar"]?></span>
      <?php endif; ?>
    </div>

    <button class="btn btn-info" type="submit" >Register</button>
    </form>
  </div>

</div>

@endsection
@section('footer') {{-- Agregamos la sección vacía para que no muestre footer en el registro. Solo funcionará si en master declaramos la sección y la cerramos con @show --}}
@endsection
