<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aspandji",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quibusdam. Suscipit nostrum quis consequatur unde fugiat corporis tempore nesciunt fugit dolorum commodi nihil molestiae ex ipsam hic non beatae, aliquam dolor impedit velit cum? Voluptatum quia sapiente corporis autem modi expedita, nesciunt porro veritatis ipsam consequatur recusandae molestias necessitatibus fugiat odit laboriosam, iste ex laborum vero eos ut et. Repellendus laborum laudantium, porro quae fuga libero voluptas? Non dolores, tempore consequatur eos architecto sit suscipit, ratione deleniti error a accusantium?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bilbil",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia temporibus, impedit nesciunt aspernatur quod obcaecati earum consequuntur qui dolor iusto ad dolore eligendi modi reiciendis harum, fugiat exercitationem quo, libero molestias reprehenderit cumque provident. Quo consequatur quis eius voluptates unde necessitatibus, veritatis ut doloremque a nulla eligendi maxime ab consequuntur eveniet, vitae neque beatae recusandae debitis animi mollitia magnam nemo odio odit explicabo. Alias impedit libero, minima rem soluta praesentium. Suscipit quae corrupti alias sed dicta, eaque voluptas deserunt incidunt animi dolor maxime assumenda nobis commodi ullam quasi inventore, delectus, voluptates at. Alias eius, reprehenderit quam nesciunt consequuntur voluptatibus enim!"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Salfa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis distinctio totam consequuntur et accusantium omnis magni quasi quibusdam recusandae, quod labore expedita dolorum quam? Ut eius, delectus, corrupti voluptatem odio totam est, dolor fuga amet nemo animi sit dolorum nihil atque! Aliquam cupiditate, assumenda eos vero quis sunt, possimus dolor voluptatum inventore enim fuga consequatur minus, temporibus delectus rem quia totam aliquid. Unde sint porro mollitia, quo quas culpa magnam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
