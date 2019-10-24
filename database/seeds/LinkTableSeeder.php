<?php

use Illuminate\Database\Seeder;
use App\Link;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::create([
            "article_id" => "1",
            "tag_id" => "1",
        ]);
        Link::create([
            "article_id" => "1",
            "tag_id" => "2",
        ]);
        Link::create([
            "article_id" => "1",
            "tag_id" => "3",
        ]);
        Link::create([
            "article_id" => "2",
            "tag_id" => "4",
        ]);
        Link::create([
            "article_id" => "2",
            "tag_id" => "1",
        ]);
        Link::create([
            "article_id" => "2",
            "tag_id" => "2",
        ]);
        Link::create([
            "article_id" => "2",
            "tag_id" => "5",
        ]);
        Link::create([
            "article_id" => "3",
            "tag_id" => "2",
        ]);    
    }
}
