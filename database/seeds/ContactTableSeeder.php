<?php

use Illuminate\Database\Seeder;
use App\Contact;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            "title" => "Contact us",
            "text" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
            "sub_title" => "Main Office",
            "champ1" => "C/ Libertad, 34",
            "champ2" => "05200 Arévalo",
            "champ3" => "0034 37483 2445 322",
            "champ4" => "hello@company.com",
        ]);
    }
}
