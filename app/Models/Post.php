<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "zainur",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias corrupti explicabo fuga atque ullam repudiandae odit nihil voluptatum. Obcaecati magni fugiat dolorum iusto repellat? Recusandae eos sint accusantium sapiente eligendi assumenda! A aperiam perspiciatis tempore architecto nam velit dicta neque laudantium aut in consectetur unde nostrum alias, fugiat itaque accusamus! Ratione sint earum recusandae nostrum, rem consequuntur, fuga architecto temporibus nesciunt minus
             aliquam magnam, doloremque ducimus reiciendis labore be
             atae modi dicta tempora sequi laborum laboriosam fugiat! Recusandae aperiam quas sunt."
            ],
            [
                "title" => "judul post kedua",
                "slug" => "judul-post-kedua",
                "author" => "zainur 2",
                "body" => "Lorem 222dolor sit amet consectetur adipisicing elit. Molestias corrupti explicabo fuga atque ullam repudiandae odit nihil voluptatum. Obcaecati magni fugiat dolorum iusto repellat? Recusandae eos sint accusantium sapiente eligendi assumenda! A aperiam perspiciatis tempore architecto nam velit dicta neque laudantium aut in consectetur unde nostrum alias, fugiat itaque accusamus! Ratione sint earum recusandae nostrum, rem consequuntur, fuga architecto temporibus nesciunt minus
                 aliquam magnam, doloremque ducimus reiciendis labore be
                 atae modi dicta tempora sequi laborum laboriosam fugiat! Recusandae aperiam quas sunttur adipisicing elit. Molestias corrupti explicabo fuga atque ullam repudiandae odit nihil voluptatum. Obcaecati magni fugiat dolorum iusto repellat? Recusandae eos sint accusantium sapiente eligendi assumenda! A aperiam perspiciatis tempore architecto nam velit dicta neque laudantium aut in consectetur unde nostrum alias, fugiat itaque accusamus! Ratione sint earum recusandae nostrum, rem consequuntur, fuga architecto temporibus nesciunt minus
                 aliquam magnam, doloremque ducimus reiciendis labore be
                 atae modi dicta tempora sequi laborum laboriosam fugiat! Recusandae aperiam quas sunt.."
                ],
            ];
            public static function all()
            {
                return self::$blog_posts;
            }
            public static function find($slug)
            {
                $posts = self::$blog_posts;
                $post = [];
                foreach($posts as $p) {
                    if($p["slug"] === $slug) {
                        $post = $p;
                    }
                }

                return $post;
            }
}
