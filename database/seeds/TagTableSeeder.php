<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            "name" => "branding",
        ]);
        Tag::create([
            "name" => "identity",
        ]);
        Tag::create([
            "name" => "video",
        ]);
        Tag::create([
            "name" => "design",
        ]);
        Tag::create([
            "name" => "inspiration",
        ]);
        Tag::create([
            "name" => "web design",
        ]);
        Tag::create([
            "name" => "photography",
        ]);
    }
}
