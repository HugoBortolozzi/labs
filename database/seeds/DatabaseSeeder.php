<?php

use Illuminate\Database\Seeder;
use App\Banner;
use App\Carousel;
use App\About;
use App\Testimonial;
use App\Service;
use App\Secservice;

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
        Testimonial::truncate();
        Service::truncate();
        Secservice::truncate();
        // $this->call(UsersTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
    }
}
