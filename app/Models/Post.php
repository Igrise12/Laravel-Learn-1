<?php


namespace App\Models;

use Illuminate\Support\Arr;

class Post{


    public static function all(){
        return [
            ['id' => 1, 'slug' => 'first-post', 'title' => 'First Post', 'author' => 'Alice', 'body' => 'This is the content of the first post.'],
            ['id' => 2, 'slug' => 'second-post', 'title' => 'Second Post', 'author' => 'Bob', 'body' => 'This is the content of the second post.'],
            ['id' => 3, 'slug' => 'third-post', 'title' => 'Third Post', 'author' => 'Charlie', 'body' => 'This is the content of the third post.'],
        ];
    }

    public static function find($slug): array {

        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post) {
            abort(404);
        }

        return $post;

    }


};
