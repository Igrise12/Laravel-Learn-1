<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="text-white py-8 max-w-screen-md border-gray-200">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-500">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-100">
            <a href="#">{{  $post->author->name }}</a> | 1 Januari 2024  
        </div>
        <p>{{ $post['body'] }}</p>
        
    </article>


</x-layout>