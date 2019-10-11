<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Secteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Secteam::create([
            "title_part1" => "Get in ",
            "title_part2" => " and  meet the team",
            "span" => "the Lab",
        ]);
        Team::create([
            "name" => "Christinne Williams",
            "photo" => "img/team/1.jpg",
            "post" => "Project Manager",
        ]);
        Team::create([
            "name" => "Christinne Williams",
            "photo" => "img/team/2.jpg",
            "post" => "Junior developer",
        ]);
        Team::create([
            "name" => "Christinne Williams",
            "photo" => "img/team/3.jpg",
            "post" => "Digital designer",
        ]);
    }
}
