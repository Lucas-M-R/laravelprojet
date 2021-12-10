<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class PostController extends Controller
{

 






    public function index(){

        // $posts = Post::orderby('created_at', 'DESC')->take(10)->get();
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



        // $post = $posts[$id] ?? 'Pas de titre';

        return view('article', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('form');
    }


    public function store(Request $request){

        $request->validate([
            'title' => ['required', 'min:5', 'max:255', 'unique:posts', new Uppercase],
            'content' => ['required', 'min:5', 'max:5000', 'unique:posts']
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        $id = Post::orderby('created_at', 'DESC')->take(1)->get('id');
        $this->show($id);
        

    }
    public function edit($id, Request $request){
       $post = Post::find($id);
       $post->update([
           'title' => $request->title,
           'content' => $request->content,
       ]);
       return view ('edit');
    }
    public function suppress($id){
       $post = Post::find($id);
       $post->delete();
       dd('Supprimé');
    }
       

    public function contact(){
        return view ('contact');
    }


}
