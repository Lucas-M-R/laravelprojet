@extends('layouts.app')

@section('content')

<h3>{{ $post->title}}</h3>  <br/>  
<p>{{ $post->content }}</p>

@forelse($post->comments as $comment)
<div class="border-red-100 border-2">
   <span> le {{ $comment->created_at->format('d/m/Y') }} à {{ $comment->created_at->format('H:m:s') }} </span>
    <br/><hr/>
    {{ $comment->content }}</div><br/>

@empty 

<div>aucun commentaire pour ce post</div>


@endforelse






<button href=" {{$post->id}} ">Editer</button>
<button href=" {{$post->id}}">Supprimer</button>
@endsection

   