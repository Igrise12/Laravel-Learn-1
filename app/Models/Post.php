<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model 

{
    // ...existing code...
    protected $fillable = ['title', 'author', 'slug', 'body'];

};
