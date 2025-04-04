<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return [
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
                'id' => 3,
                'slug' => 'baji-diary-3',
                'title' => 'Baji Diary 3',
                'author' => 'Penny',
                'date' => '1 March',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus expedita iusto voluptates soluta maxime dolores minima cumque explicabo ipsum, adipisci dolore consequuntur laudantium animi autem itaque ad corrupti? Quas, vero?'
            ],
    
        ];
    }
    public static function find($slug): array{
        // * Pilih 1 Callback
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // * Pilih 2 Arrow Function
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if(!$post){
            abort(404);
        }
        return $post;
    }
}
