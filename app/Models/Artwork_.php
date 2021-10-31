<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Self_;

class Artwork 
{
    private static $art_posts = [
        [
            "caption" => "Artwork 1",
            "data-name" => "drawing",
            "img" => "a1.jpg",
            "slug" => "artwork-1"
        ],
        [
            "caption" => "Artwork 2",
            "data-name" => "drawing",
            "img" => "a2.jpg",
            "slug" => "artwork-2"
        ]
    ];

    public static function all(){
        return collect(self::$art_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
