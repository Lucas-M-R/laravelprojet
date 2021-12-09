@extends('layouts.app')

@section('content')

<h3>{{ $post->title}}</h3>  <br/>  
<p>{{ $post->content }}</p>
@endsection

   