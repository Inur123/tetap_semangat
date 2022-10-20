<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "posts",
        "posts" => Post::all()

    ]);
});


Route::get('posts/{slug}', function($slug){



     
    return view('post', [
        "title" => "singgle post",
        "post" => Post::find($slug)
    ]);
}); 


