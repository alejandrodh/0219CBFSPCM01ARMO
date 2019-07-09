<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

<<<<<<< HEAD
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/genres', 'GenreController');
=======
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movies', 'MovieController@api');
>>>>>>> a662e6c5f55f622341486fcbdfafdad44071933a
