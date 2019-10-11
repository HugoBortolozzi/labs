<?php

use Illuminate\Database\Seeder;
use App\Promotion;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promotion::create([
            "title" => "Are you ready to stand out?",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            "button" => "Browse",
        ]);
    }
}
