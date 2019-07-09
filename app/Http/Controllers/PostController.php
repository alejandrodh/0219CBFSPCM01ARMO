<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //dd($request);
      //Paso 2: Antes vamos a validar los del formulario

      $rules = [ //https://laravel.com/docs/5.8/validation#rule-size
        "title" => "alpha_dash|max:255|filled",
        "excerpt" => "|max:255|",
        "content" => "string|filled",
        "featured-image" => "image",
      ];
      $messages = [
        "filled" => ":attribute no puede estar vacío.",
        "alpha_dash" => ":attribute debe ser alfa numérico.",
        "string" => ":attribute es debe ser texto.",
        "max" => ":attribute tiene un máximo de :max",
        "image"=>"el archivo debe ser del tipo .jpeg, .png, .bmp, .gif, o .svg"
      ];

      $this->validate($request, $rules, $messages); //Son 3 arrays asociativos

      //Paso 1:
      $post = new Post();

      //Paso 3 imagen:
      $route = $request->file('featured-image')->store('public/posts');
      $fileName = basename($route); //función de php;
      //dd($route, $fileName);
      $post->featured_img = $fileName;

      //Paso 1:
      $post->title = $request->title;
      $post->excerpt = $request->excerpt;
      $post->content = $request->content;
      // dd($request, $post);
      $post->save();

      return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $post->get(); //Equivalente a fetch o fetchAll

        return view('post')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function delete(Request $request){
      $id = $request->id;
      $postABorrar = Post::find($id);
      $postABorrar->delete();

      return redirect("/");

    }
}
