<?php

use Illuminate\Database\Seeder;
use App\Projet;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProjetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projet::create([
            "name" => "Get in the lab",
            "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "photo" => "img/card-1.jpg",
        ]);
        Projet::create([
            "name" => "Projects online",
            "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "photo" => "img/card-2.jpg",
        ]);
        Projet::create([
            "name" => "SMART MARKETING",
            "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "photo" => "img/card-3.jpg",
        ]);
    }
}
