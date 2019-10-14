<?php

use Illuminate\Database\Seeder;
use App\Carousel;
use App\Testimonial;
use App\Service;
use App\Team;
use App\Projet;

use App\Template;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Carousel::truncate();
        Testimonial::truncate();
        Service::truncate();
        Team::truncate();
        Projet::truncate();

        Template::truncate();
        // $this->call(UsersTableSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(ProjetTableSeeder::class);
        $this->call(TemplateTableSeeder::class);
    }
}
