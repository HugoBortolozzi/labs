<?php

use Illuminate\Database\Seeder;
use App\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            "title" => "Get in the lab",
            "logo" => "flaticon-023-flask",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        Service::create([
            "title" => "Projects online",
            "logo" => "flaticon-011-compass",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        Service::create([
            "title" => "SMART MARKETING",
            "logo" => "flaticon-037-idea",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        Service::create([
            "title" => "Social Media",
            "logo" => "flaticon-039-vector",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        Service::create([
            "title" => "Brainstorming",
            "logo" => "flaticon-036-brainstorming",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        Service::create([
            "title" => "Documented",
            "logo" => "flaticon-026-search",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        Service::create([
            "title" => "Responsive",
            "logo" => "flaticon-018-laptop-1",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        Service::create([
            "title" => "Retina ready",
            "logo" => "flaticon-043-sketch",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        Service::create([
            "title" => "Ultra modern",
            "logo" => "flaticon-012-cube",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
    }
}
