<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer {{ $post->title }}
        </h2>
    </x-slot>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="my-5">
        @foreach ($errors->all() as $error)

            <span class="block text-red-500">{{ $error }}</span>
        @endforeach  
    </div>




    <form action=" {{ route('posts.update', $post) }} " method="POST" enctype="multipart/form-data" class="mt-10">
    
    @method('put')
    @csrf

    <x-label for="title" value="Intitulé du Projet" />
    <x-input id="title" name="title" value="{{$post->title}}" />

    <x-label for="content" value="Descriptif du Projet" />
    <textarea id="content" name="content" >{{$post->content}}</textarea>

    <x-label for="image" value="Image du projet" />
    <x-input id="image" type="file" name="image" />

    <x-label for="category" value="Catégorie du projet" />
        <select name="category" id="category">
            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
            @endforeach
        </select>
        <x-button style="display: block !important;" class="mt-5">Modifier mon projet</x-button>
    
    </form>
    <div class="overflow-x-hidden bg-gray-100">
    
        <div class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
            </div>
        </div>
        {{-- @include('partials.footer') --}}
            </div>
    </div>
    
</x-app-layout>