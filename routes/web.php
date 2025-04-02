<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'baji-diary-1',
            'title' => 'Baji Diary 1',
            'author' => 'Baji',
            'date' => '1 January',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum consequuntur officiis quasi laudantium, minus magni sint, voluptatibus nobis perspiciatis adipisci illum voluptate optio perferendis quisquam repellendus quis nesciunt voluptatum distinctio.'
        ],
        [
            'id' => 2,
            'slug' => 'baji-diary-2',
            'title' => 'Baji Diary 2',
            'author' => 'Meki',
            'date' => '1 February',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum laboriosam aliquam doloribus tempore repellendus suscipit ratione animi! Debitis porro dolore fuga itaque est commodi repudiandae illum corporis quisquam omnis!'
        ],
        [
            'id' => 2,
            'slug' => 'baji-diary-3',
            'title' => 'Baji Diary 2',
            'author' => 'Meki',
            'date' => '1 February',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus expedita iusto voluptates soluta maxime dolores minima cumque explicabo ipsum, adipisci dolore consequuntur laudantium animi autem itaque ad corrupti? Quas, vero?'
        ],

    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'baji-diary-1',
            'title' => 'Baji Diary 1',
            'author' => 'Baji',
            'date' => '1 January',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum consequuntur officiis quasi laudantium, minus magni sint, voluptatibus nobis perspiciatis adipisci illum voluptate optio perferendis quisquam repellendus quis nesciunt voluptatum distinctio.'
        ],
        [
            'id' => 2,
            'slug' => 'baji-diary-2',
            'title' => 'Baji Diary 2',
            'author' => 'Meki',
            'date' => '1 February',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum laboriosam aliquam doloribus tempore repellendus suscipit ratione animi! Debitis porro dolore fuga itaque est commodi repudiandae illum corporis quisquam omnis!'
        ],
        [
            'id' => 2,
            'slug' => 'baji-diary-3',
            'title' => 'Baji Diary 2',
            'author' => 'Meki',
            'date' => '1 February',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus expedita iusto voluptates soluta maxime dolores minima cumque explicabo ipsum, adipisci dolore consequuntur laudantium animi autem itaque ad corrupti? Quas, vero?'
        ],
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'instagram' => 'https://instagram.com/_bajif', 'github' => 'https://github.com/bajiff/_bajiff']);
});
