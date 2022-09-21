<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "author" => "Man",
            "slug" => "post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. At rerum, dicta tenetur, accusamus ipsa aut voluptatibus a repudiandae odio debitis veritatis. Numquam dignissimos eligendi, vero tempore ipsam est necessitatibus distinctio cumque fugiat, et illum dolorem. Facere voluptates aliquid iure? Reprehenderit earum impedit provident, adipisci ad aspernatur nesciunt modi et quia ex dignissimos quasi ea optio maxime est voluptatibus nostrum soluta ullam quos explicabo! Explicabo ipsum placeat reiciendis accusamus veritatis quis vero tempore eos deleniti natus labore quidem architecto, necessitatibus eaque!",
        ],
        [
            "title" => "Post Kedua",
            "author" => "Many",
            "slug" => "post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. At rerum, dicta tenetur, accusamus ipsa aut voluptatibus a repudiandae odio debitis veritatis. Numquam dignissimos eligendi, vero tempore ipsam est necessitatibus distinctio cumque fugiat, et illum dolorem. Facere voluptates aliquid iure? Reprehenderit earum impedit provident, adipisci ad aspernatur nesciunt modi et quia ex dignissimos quasi ea optio maxime est voluptatibus nostrum soluta ullam quos explicabo! Explicabo ipsum placeat reiciendis accusamus veritatis quis vero tempore eos deleniti natus labore quidem architecto, necessitatibus eaque!",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}