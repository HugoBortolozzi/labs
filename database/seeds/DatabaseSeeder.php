<?php

use Illuminate\Database\Seeder;
use App\Banner;
use App\Carousel;
use App\About;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Banner::truncate();
        Carousel::truncate();
        About::truncate();
        // $this->call(UsersTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(AboutTableSeeder::class);
    }
}
