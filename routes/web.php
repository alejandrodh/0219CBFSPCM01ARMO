<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/peliculas', function(){
//   $peliculas = [
//     "Avengers Age of Ultron",
//     "Avengers End Game",
//     "Captain Marvel",
//     "The Mule",
//   ];
//   $vac = compact('peliculas');
//
//   return view('peliculas',$vac);
// });
Route::resource('/movies', 'movieController');
Route::get('/genres', 'GenreController@index');
Route::get('/movie/{movie}','movieController@show');
Route::get('/actores', 'actorController@index');//El ejercicio pide directory pero index es el standard para listados.
Route::get('/actor/{id}', 'actorController@show');
Route::get("/actores/buscar", 'actorController@search');

//Migración de Proyecto
$id;
Route::get('/', function(){
  return view('index');
});
Route::get('/register', function(){
  return view('register');
});
Route::get('/login', function(){
  return view('login');
});
Route::get('/post/{id}', 'PostController@show');
Route::get('/newpost', 'PostController@create');
Route::post('/newpost', 'PostController@store');
Route::post('/deletepost', 'PostController@delete')->middleware();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
