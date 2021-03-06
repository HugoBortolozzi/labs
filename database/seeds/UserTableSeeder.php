<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "role" => "admin",
            "name" => "hugo",
            "email" => "test@gmail.com",
            "password" => bcrypt('12345678'),
        ]);
    }
}
