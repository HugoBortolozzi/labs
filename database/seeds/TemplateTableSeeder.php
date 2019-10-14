<?php

use Illuminate\Database\Seeder;
use App\Template;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::create([
            "name" => "main_page_title",
            "contain" => "Home",
        ]);

        // Section Header 

        Template::create([
            "name" => "nav_logo",
            "contain" => "img/logo.png",
        ]);
        Template::create([
            "name" => "banner_logo",
            "contain" => "img/big-logo.png",
        ]);
        Template::create([
            "name" => "banner_title",
            "contain" => "Get your freebie template now!",
        ]);

            // Section 1 

        Template::create([
            "name" => "sec1_title_part1",
            "contain" => "Get in",
        ]);

        // 5 

        Template::create([
            "name" => "sec1_title_span",
            "contain" => "the Lab",
        ]);
        Template::create([
            "name" => "sec1_title_part2",
            "contain" => "and discover the world",
        ]);
        Template::create([
            "name" => "sec1_text1",
            "contain" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.",
        ]);
        Template::create([
            "name" => "sec1_text2",
            "contain" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.",
        ]);
        Template::create([
            "name" => "sec1_button",
            "contain" => "Browse",
        ]);

            // 10
        
        Template::create([
            "name" => "sec1_video",
            "contain" => "https://www.youtube.com/watch?v=JgHfx2v9zOU",
        ]);
        Template::create([
            "name" => "sec1_video_img",
            "contain" => "img/video.jpg",
        ]);

        // Section 2 

        Template::create([
            "name" => "sec2_title",
            "contain" => "What our clients say",
        ]);

        // Section 3 

        Template::create([
            "name" => "sec3_title_part1",
            "contain" => "Get in",
        ]);
        Template::create([
            "name" => "sec3_title_span",
            "contain" => "the Lab",
        ]);
        
        // 15
        
        Template::create([
            "name" => "sec3_title_part2",
            "contain" => "and see the services",
        ]);
        Template::create([
            "name" => "sec3_button",
            "contain" => "Browse",
        ]);

            // Section 4 

        Template::create([
            "name" => "sec4_title_part1",
            "contain" => "Get in",
        ]);
        Template::create([
            "name" => "sec4_title_span",
            "contain" => "the Lab",
        ]);
        Template::create([
            "name" => "sec4_title_part2",
            "contain" => "and  meet the team",
        ]);

            // 20

            // Section 5 

        Template::create([
            "name" => "sec5_title",
            "contain" => "Are you ready to stand out?",
        ]);
        Template::create([
            "name" => "sec5_text",
            "contain" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
        ]);
        Template::create([
            "name" => "sec5_button",
            "contain" => "Browse",
        ]);

        // Section 6 

        Template::create([
            "name" => "sec6_title",
            "contain" => "Contact us",
        ]);
        Template::create([
            "name" => "sec6_text",
            "contain" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
        ]);

            // 25

        Template::create([
            "name" => "sec6_sub_title",
            "contain" => "Main Office",
        ]);
        Template::create([
            "name" => "sec6_string1",
            "contain" => "C/ Libertad, 34",
        ]);
        Template::create([
            "name" => "sec6_string2",
            "contain" => "05200 Arévalo",
        ]);
        Template::create([
            "name" => "sec6_string3",
            "contain" => "0034 37483 2445 322",
        ]);
        Template::create([
            "name" => "sec6_string4",
            "contain" => "hello@company.com",
        ]);

        // 30

        // Section 6 Formulaire 

        Template::create([
            "name" => "contactform_name",
            "contain" => "Your name",
        ]);
        Template::create([
            "name" => "contactform_mail",
            "contain" => "Your email",
        ]);
        Template::create([
            "name" => "contactform_subject",
            "contain" => "Subject",
        ]);
        Template::create([
            "name" => "contactform_message",
            "contain" => "Message",
        ]);
        Template::create([
            "name" => "contactform_button",
            "contain" => "send",
        ]);

            // 35

        Template::create([
            "name" => "contactform_target",
            "contain" => "test@gmail.com",
        ]);

        // Page 2 

        Template::create([
            "name" => "page2_title",
            "contain" => "Services",
        ]);

            // Section 1 

        Template::create([
            "name" => "page2_sec2_title_part1",
            "contain" => "Get in",
        ]);
        Template::create([
            "name" => "page2_sec2_title_span",
            "contain" => "the Lab",
        ]);
        Template::create([
            "name" => "page2_sec2_title_part2",
            "contain" => "and  discover the world",
        ]);

            // 40

        Template::create([
            "name" => "page2_sec2_button",
            "contain" => "Browse",
        ]);

            // Page 3

        Template::create([
            "name" => "page3_title",
            "contain" => "Blog",
        ]);

            // Widgets  
        
        Template::create([
            "name" => "page3_widget1_name",
            "contain" => "Categories",
        ]);

        Template::create([
            "name" => "page3_widget2_name",
            "contain" => "Instagram",
        ]);

        Template::create([
            "name" => "page3_widget3_name",
            "contain" => "Tags",
        ]);
        
        // 45

        Template::create([
            "name" => "page3_widget4_name",
            "contain" => "Quote",
        ]);            
        Template::create([
            "name" => "page3_widget4_contain",
            "contain" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.",
        ]);

        Template::create([
            "name" => "page3_widget5_name",
            "contain" => "Add",
        ]);
        Template::create([
            "name" => "page3_widget5_img",
            "contain" => "img/add.jpg",
        ]);
        Template::create([
            "name" => "page3_widget5_path_link",
            "contain" => "#",
        ]);

        // 50

        Template::create([
            "name" => "page3_title",
            "contain" => "Contact"
        ]);
    }
}
