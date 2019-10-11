<?php

use Illuminate\Database\Seeder;
use App\Banner;
use App\Carousel;
use App\About;
use App\Testimonial;
use App\Service;
use App\Secservice;
use App\Team;
use App\Secteam;
use App\Promotion;
use App\Contact;
use App\Contactform;
use App\Projet;

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
        Team::truncate();
        Secteam::truncate();
        Promotion::truncate();
        Contact::truncate();
        Contactform::truncate();
        Projet::truncate();
        // $this->call(UsersTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(PromotionTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(ContactformTableSeeder::class);
        $this->call(ProjetTableSeeder::class);
    }
}
