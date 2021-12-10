@extends('layouts.app')

@section('content')
<h1>Modifier post</h1>
<form action="{{ route('posts.edit') }}" method="post">
    @csrf
        <label for="title">intitulé</label>
        <input class="bg-green-100 border-gray-100 border-2	" type="text" name="title">

   
        <label for="content">Contenu</label>
        <textarea class="bg-green-100 border-gray-100 border-2	" cols="30" rows="10" name="content" ></textarea>

    <button class="bg-green-300 "" type="submit">Modifier</button>

</form>
    
@endsection