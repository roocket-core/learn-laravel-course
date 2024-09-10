<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts' , function() {
    $posts = [
        [
            'title' => 'Post Title 1',
            'content' => 'this is description of post title 1'
        ],
        [
            'title' => 'Post Title 2',
            'content' => 'this is description of post title 2'
        ],
        [
            'title' => 'Post Title 3',
            'content' => 'this is description of post title 3'
        ],
    ];


   return view('posts.index' , compact('posts'));
})->name('posts');

Route::get('/posts/create' , function() {
   return view('posts.create');
})->name('posts.create');
