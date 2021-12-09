@extends('layouts.app')       

@section('content')

    <h2>liste des articles</h2>
<ul class="">

    @if ($posts->count() > 0)
    @foreach ($posts as $post)        
    <h3><a href="{{ route('posts.show', [$post->id])}}">{{ $post->title }}</a></h3> 
    @endforeach
@else
<span>Aucun post disponible</span>
       @endif
</ul>

    
@endsection

