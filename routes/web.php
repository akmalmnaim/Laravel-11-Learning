<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts', function () 
{
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => [
            [   'id'=> 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Akmal Muhammad Naim',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsum alias laudantium tempora maxime ullam fugit vero ducimus quos recusandae quod, voluptates perspiciatis temporibus totam corporis iusto necessitatibus quibusdam accusamus?'
            ],
            [   'id' => 2,
            'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Akmal Muhammad Naim',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsum alias laudantium tempora maxime ullam fugit vero ducimus quos recusandae quod, voluptates perspiciatis temporibus totam corporis iusto necessitatibus quibusdam accusamus?'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function($slug){
    $posts =[
        [   'id'=> 1,
             'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Akmal Muhammad Naim',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsum alias laudantium tempora maxime ullam fugit vero ducimus quos recusandae quod, voluptates perspiciatis temporibus totam corporis iusto necessitatibus quibusdam accusamus?'
        ],
        [   'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Akmal Muhammad Naim',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsum alias laudantium tempora maxime ullam fugit vero ducimus quos recusandae quod, voluptates perspiciatis temporibus totam corporis iusto necessitatibus quibusdam accusamus?'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post',['title' => 'Single Post', 'post' => $post]);
});

Route ::get('/contact', function (){
    return view('contact', ['title'=> 'Contact Page']);
});