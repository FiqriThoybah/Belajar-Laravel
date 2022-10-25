<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
     
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fiqri Thoybah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio consequatur reiciendis nostrum aut eum quo natus, labore doloribus consequuntur aspernatur rerum, voluptate sit tenetur molestiae! Quia hic perferendis consequuntur quisquam aperiam repellendus consequatur fugiat architecto ab inventore perspiciatis repellat, ipsum ducimus, dignissimos quasi. Est eveniet, iure inventore iste voluptatibus accusamus dolorum, consequatur, deserunt soluta similique aperiam. Perferendis veniam modi aliquid odit recusandae, aspernatur a incidunt culpa rem, minus hic unde illum sed libero. Molestiae sapiente vitae dicta tenetur obcaecati iste!" 
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fiqri ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio consequatur reiciendis nostrum aut eum quo natus, labore doloribus consequuntur aspernatur rerum, voluptate sit tenetur molestiae! Quia hic perferendis consequuntur quisquam aperiam repellendus consequatur fugiat architecto ab inventore perspiciatis repellat, ipsum ducimus, dignissimos quasi. Est eveniet, iure inventore iste voluptatibus accusamus dolorum, consequatur, deserunt soluta similique aperiam. Perferendis veniam modi aliquid odit recusandae, aspernatur a incidunt culpa rem, minus hic unde illum sed libero. Molestiae sapiente vitae dicta tenetur obcaecati iste!" 
        ],  
        
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
