<?php

use Illuminate\Database\Seeder;
use App\Contactform;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contactform::create([
            "name" => "Your name",
            "mail" => "Your email",
            "subject" => "subject",
            "message" => "Subject",
            "button" => "send",
            "send_to" => "test@gmail.com"
        ]);
    }
}
