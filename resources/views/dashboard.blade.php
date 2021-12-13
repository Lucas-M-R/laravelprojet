<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                {{ session('success') }}
            @endif


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)                                
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between"><span class="font-light text-gray-600">
                                {{ $post->created_at->format('d M Y') }}</span><div 
                                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
                                    {{$post->category->name}}</div>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">
                                {{$post->title}}</a>
                                <div class="flex">
                                    <img src="{{ asset('/storage/' . $post->image)}}" alt="" style="max-height:150px;">
                                    <p class="ml-5 mt-2 text-gray-600">
                                        {{Str::limit($post->content), 120}}
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <a href="{{route('posts.show', $post)}}"
                                    class="text-blue-500 hover:underline">
                                    En savoir plus</a>
                                    <h1 class="font-bold text-gray-700 hover:underline">{{ $post->user->name}}</h1>
                                </a>
                            </div>                            
                            <div class="flex  justify-around mt-5">
                                <a href="{{ route('posts.edit', $post)}}" class="bg-yellow-500 rounded px-2 py-3 hover:bg-yellow-400 font-bold">Editer {{ $post->title }}</a>
                                <a href="#" class="bg-red-500 rounded px-2 py-3 hover:bg-red-400 font-bold" 
                                    onclick="event.preventDefault
                                    document.getElementById('destroy-post-form').submit();         
                                    ">Supprimer {{ $post->title }}
                                    <form action="{{ route('posts.destroy', $post )}}" method="POST" id="destroy-post-form">
                                    @csrf
                                    @method('delete')</form>
                                </a>
                            </div>
                        </div>                    
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

