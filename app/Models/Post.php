<?php
namespace App\Models;

use Illuminate\Support\Arr;


class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Akmal Muhammad Naim',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsum alias laudantium tempora maxime ullam fugit vero ducimus quos recusandae quod, voluptates perspiciatis temporibus totam corporis iusto necessitatibus quibusdam accusamus?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Akmal Muhammad Naim',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsum alias laudantium tempora maxime ullam fugit vero ducimus quos recusandae quod, voluptates perspiciatis temporibus totam corporis iusto necessitatibus quibusdam accusamus?'
            ]
        ];
    }
    public static function find($slug) : array 
    {   
    $post = Arr::first(static::all(), fn ($post) =>  $post['slug'] === $slug);

    if(! $post){
        abort(404);
    }

    return $post;
   }
}



