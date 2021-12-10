@extends('layouts.app')       

@section('content')

    <h2>liste des articles</h2>

<div class="container d-flex flex-wrap justify-content-around">
    @if ($posts->count() > 0)
    @foreach ($posts as $post)   

    <div class="card m-3 d-flex flex-column " style="width: 18rem;">
        <img src="https://loremflickr.com/250/150" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">Un peu de texte pour décrire le projet</p>
          <a href="{{ route('posts.show', [$post->id])}}" class="btn btn-outline-secondary">En savoir plus</a>
        </div>
      </div>
    



    {{-- <h3><a href="{{ route('posts.show', [$post->id])}}">{{ $post->title }}</a></h3>  --}}
    @endforeach
@else
<span>Aucun post disponible</span>
       @endif

</div>
    
@endsection

