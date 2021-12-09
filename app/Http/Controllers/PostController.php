<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        // dd($posts);

        return view('articles', [
            'posts' => $posts
        ]);
    }
    public function show($id){


        // $post = Post::where('id', '3')->firstOrFail();
        $post = Post::findOrFail($id);
        // dd($post);



        // $posts = [
        //     1 => 'mon titre n°1',
        //     2 => 'mon titre n°2'
        // ];

        // $post = $posts[$id] ?? 'Pas de titre';

        return view('article', [
            'post' => $post
        ]);
    }
    public function contact(){
        return view ('contact');
    }
    public function create(){
        return view('form');
    }
}
