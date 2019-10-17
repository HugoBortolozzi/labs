<?php

use Illuminate\Database\Seeder;
use App\Team;
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
        Team::create([
            "name" => "Christinne Williams",
            "photo" => "img/team/1.jpg",
            "post" => "Project Manager",
        ]);
        Team::create([
            "name" => "Christinne Williams",
            "photo" => "img/team/2.jpg",
            "post" => "Junior developer",
            "leader" => "oui",
        ]);
        Team::create([
            "name" => "Christinne Williams",
            "photo" => "img/team/3.jpg",
            "post" => "Digital designer",
        ]);
    }
}
