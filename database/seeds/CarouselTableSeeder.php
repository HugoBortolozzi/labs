<?php

use Illuminate\Database\Seeder;
use App\Carousel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CarouselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create([
            "img" => "img/01.jpg",
        ]);
        Carousel::create([
            "img" => "img/02.jpg",
        ]);
    }
}
