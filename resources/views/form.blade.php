@extends('layouts.app')

@section('content')
<h1>Nouveau Post</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="">{{ $error }}</div>
    @endforeach    
@endif

<form action="{{ route('posts.store') }}" method="post">
    @csrf
        <label for="title">intitulé</label>
        <input class="" type="text" name="title">

   
        <label for="content">Contenu</label>
        <textarea class="" cols="30" rows="10" name="content" ></textarea>

    <button class="btn btn-outline-info" type="submit">Créer</button>

</form>
    
@endsection