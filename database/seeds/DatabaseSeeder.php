<?php

use Illuminate\Database\Seeder;
use App\Banner;

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
        $this->call(UsersTableSeeder::class);
        $this->call(BannerTableSeeder::class);
    }
}
