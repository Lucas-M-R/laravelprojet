<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <img src="{{ asset('/storage/' . $post->image)}}" alt="">
    <div>{{$post->content}}</div>

    <div class="overflow-x-hidden bg-gray-100">
    
        <div class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
            </div>
        </div>
        @include('partials.footer')
            </div>
    </div>
    
</x-app-layout>