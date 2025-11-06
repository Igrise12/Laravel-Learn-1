<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'John Doe', 'email' => 'john@example.com']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        ['id' => 1, 'slug' => 'first-post', 'title' => 'First Post', 'author' => 'Alice', 'body' => 'This is the content of the first post.'],
        ['id' => 2, 'slug' => 'second-post', 'title' => 'Second Post', 'author' => 'Bob', 'body' => 'This is the content of the second post.'],
        ['id' => 3, 'slug' => 'third-post', 'title' => 'Third Post', 'author' => 'Charlie', 'body' => 'This is the content of the third post.'],
    ]]);
});

Route::get('/posts/{slug}', function ($slug){
    $posts =[
        ['id' => 1, 'slug' => 'first-post', 'title' => 'First Post', 'author' => 'Alice', 'body' => 'This is the content of the first post.'],
        ['id' => 2, 'slug' => 'second-post', 'title' => 'Second Post', 'author' => 'Bob', 'body' => 'This is the content of the second post.'],
        ['id' => 3, 'slug' => 'third-post', 'title' => 'Third Post', 'author' => 'Charlie', 'body' => 'This is the content of the third post.'],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});



