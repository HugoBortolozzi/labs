<?php

use Illuminate\Database\Seeder;
use App\Comment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "name" => "Michael Smith",
            "email" => "test@gmail.com",
            "subject" => "totally useless",
            "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "photo" => "img/avatar/01.jpg",
            "article_id" => "1",
        ]);
        Comment::create([
            "name" => "Michael Smith",
            "email" => "test@gmail.com",
            "subject" => "totally useless",
            "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "photo" => "img/avatar/02.jpg",
            "article_id" => "1",
        ]);
        Comment::create([
            "name" => "Michael Smith",
            "email" => "test@gmail.com",
            "subject" => "totally useless",
            "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "photo" => "img/avatar/01.jpg",
            "article_id" => "2",
        ]);
        Comment::create([
            "name" => "Michael Smith",
            "email" => "test@gmail.com",
            "subject" => "totally useless",
            "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "photo" => "img/avatar/02.jpg",
            "article_id" => "2",
        ]);
        Comment::create([
            "name" => "Michael Smith",
            "email" => "test@gmail.com",
            "subject" => "totally useless",
            "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "photo" => "img/avatar/01.jpg",
            "article_id" => "3",
        ]);
        Comment::create([
            "name" => "Michael Smith",
            "email" => "test@gmail.com",
            "subject" => "totally useless",
            "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "photo" => "img/avatar/02.jpg",
            "article_id" => "3",
        ]);
    }
}
