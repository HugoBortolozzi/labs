<?php

use Illuminate\Database\Seeder;
use App\Banner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            "logo" => "img/big-logo.png",
            "sub_title" => "Get your freebie template now!",
        ]);
    }
}
