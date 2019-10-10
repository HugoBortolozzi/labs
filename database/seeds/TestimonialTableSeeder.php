<?php

use Illuminate\Database\Seeder;
use App\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            "photo" => "img/avatar/01.jpg",
            "name" => "Michael Smith",
            "post" => "CEO Company",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        Testimonial::create([
            "photo" => "img/avatar/02.jpg",
            "name" => "Michael Smith",
            "post" => "CEO Company",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        Testimonial::create([
            "photo" => "img/avatar/02.jpg",
            "name" => "Michael Smith",
            "post" => "CEO Company",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        Testimonial::create([
            "photo" => "img/avatar/01.jpg",
            "name" => "Michael Smith",
            "post" => "CEO Company",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        Testimonial::create([
            "photo" => "img/avatar/01.jpg",
            "name" => "Michael Smith",
            "post" => "CEO Company",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        Testimonial::create([
            "photo" => "img/avatar/02.jpg",
            "name" => "Michael Smith",
            "post" => "CEO Company",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
    }
}
