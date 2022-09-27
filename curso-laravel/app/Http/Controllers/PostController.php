<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
        // $posts = [
        //     ['title' => 'Primer post'],
        //     ['title' => 'Segundo post'],
        //     ['title' => 'Tercer post'],
        // ];

        // Traer los datos de la base de datos
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]); // Retonarmos la vista desde la carpeta posts
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)

    {
        // Validar los datos
        $request->validate([
            'title' => ['required', 'min:3',],
            'body' => ['required', 'min:5'],
        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();


        // Mensajes de session
        session()->flash('status', '¡El post fue creado con exito!');

        // Redireccionar
        return to_route('posts.index');
    }
}
