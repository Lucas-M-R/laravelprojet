<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>
    <div class="overflow-x-hidden bg-gray-100">    
        <div class="px-6 py-8">
            <div class="container flex  justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Projets</h1>
                    <div class="flex-column">
                        @foreach ($posts as $post)
                            <div class="mt-6">
                                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                                    <div class="flex items-center justify-between">
                                        <span class="font-light text-gray-600">{{ $post->created_at->format('d M Y') }}</span>
                                        <div class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
                                            {{$post->category->name}}
                                        </div>
                                    </div>
                                    <div class=" my-3"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">
                                        {{$post->title}}</a>
                                        <div class="flex">
                                            <img src="{{ asset('/storage/' . $post->image)}}" alt="" style="object-fit: cover; width: 300px;">
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
                                </div>
                            </div>                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
</x-app-layout>