<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class="text-white py-8 max-w-screen-md border-b border-gray-200">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-500">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-100 ">
            <a class= "hover:underline text-blue" href="/authors/{{ $post->author->id }}">{{  $post->author->name   }}</a> | 1 Januari 2024  
        </div>
        <p>{{  Str::limit($post['body'], 30) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class ="font-medium text-red-500 hover:underline">Read more &raquo;</a>
    </article>

    @endforeach

</x-layout>