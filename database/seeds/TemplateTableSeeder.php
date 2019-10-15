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
            "name" => "Titre de la page d'acceuil",
            "contain" => "Home",
        ]);

        // Section Header 

        Template::create([
            "name" => "Logo de la navbar",
            "contain" => "img/logo.png",
        ]);
        Template::create([
            "name" => "Logo central",
            "contain" => "img/big-logo.png",
        ]);
        Template::create([
            "name" => "Texte Bannière",
            "contain" => "Get your freebie template now!",
        ]);

            // Section 1 

        Template::create([
            "name" => "Titre de la 1ère section partie 1",
            "contain" => "Get in",
        ]);

        // 5 

        Template::create([
            "name" => "Titre de la 1ère section partie colorée",
            "contain" => "the Lab",
        ]);
        Template::create([
            "name" => "Titre de la 1ère section partie 1",
            "contain" => "and discover the world",
        ]);
        Template::create([
            "name" => "1er texte de la 1ère section",
            "contain" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.",
        ]);
        Template::create([
            "name" => "2ème texte de la 1ère section",
            "contain" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.",
        ]);
        Template::create([
            "name" => "Bouton de la 1ère section",
            "contain" => "Browse",
        ]);

            // 10
        
        Template::create([
            "name" => "Lien vidéo de la 1ère section",
            "contain" => "https://www.youtube.com/watch?v=JgHfx2v9zOU",
        ]);
        Template::create([
            "name" => "Image Vignatte de la vidéo de la 1ère section",
            "contain" => "img/video.jpg",
        ]);

        // Section 2 

        Template::create([
            "name" => "Titre de la 2ème sectin",
            "contain" => "What our clients say",
        ]);

        // Section 3 

        Template::create([
            "name" => "Titre de la 3ème section partie 1",
            "contain" => "Get in",
        ]);
        Template::create([
            "name" => "Titre de la 3ème section partie colorée",
            "contain" => "the Lab",
        ]);
        
        // 15
        
        Template::create([
            "name" => "Titre de la 3ème section partie 2",
            "contain" => "and see the services",
        ]);
        Template::create([
            "name" => "Bouton de la 3ème section",
            "contain" => "Browse",
        ]);

            // Section 4 

        Template::create([
            "name" => "Titre de la 4ème section partie 1",
            "contain" => "Get in",
        ]);
        Template::create([
            "name" => "Titre de la 4ème section partie colorée",
            "contain" => "the Lab",
        ]);
        Template::create([
            "name" => "Titre de la 4ème section partie 2",
            "contain" => "and  meet the team",
        ]);

            // 20

            // Section 5 

        Template::create([
            "name" => "Titre de la 5ème section",
            "contain" => "Are you ready to stand out?",
        ]);
        Template::create([
            "name" => "Texte de la 5ème",
            "contain" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
        ]);
        Template::create([
            "name" => "Bouton de la 5ème section",
            "contain" => "Browse",
        ]);

        // Section 6 

        Template::create([
            "name" => "Titre de la section 6",
            "contain" => "Contact us",
        ]);
        Template::create([
            "name" => "Texte de la section 6",
            "contain" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
        ]);

            // 25

        Template::create([
            "name" => "Sous-titre de la section 6",
            "contain" => "Main Office",
        ]);
        Template::create([
            "name" => "1er champ de la section 6",
            "contain" => "C/ Libertad, 34",
        ]);
        Template::create([
            "name" => "2ème champ de la section 6",
            "contain" => "05200 Arévalo",
        ]);
        Template::create([
            "name" => "3ème champ de la section 6",
            "contain" => "0034 37483 2445 322",
        ]);
        Template::create([
            "name" => "4ème champ de la section 6",
            "contain" => "hello@company.com",
        ]);

        // 30

        // Section 6 Formulaire 

        Template::create([
            "name" => "Contenu attendu du 1er champ du formulaire",
            "contain" => "Your name",
        ]);
        Template::create([
            "name" => "Contenu attendu du 2ème champ du formulaire",
            "contain" => "Your email",
        ]);
        Template::create([
            "name" => "Contenu attendu du 3ème champ du formulaire",
            "contain" => "Subject",
        ]);
        Template::create([
            "name" => "Contenu attendu du 4ème champ du formulaire",
            "contain" => "Message",
        ]);
        Template::create([
            "name" => "Bouton du formulaire",
            "contain" => "send",
        ]);

            // 35

        Template::create([
            "name" => "E-mail cible du formulaire",
            "contain" => "test@gmail.com",
        ]);

        // Page 2 

        Template::create([
            "name" => "Titre de la deuxième page",
            "contain" => "Services",
        ]);

            // Section 1 

        Template::create([
            "name" => "Titre de la 2ème section de la page 2 partie 1",
            "contain" => "Get in",
        ]);
        Template::create([
            "name" => "Titre de la 2ème section de la page 2 partie colorée",
            "contain" => "the Lab",
        ]);
        Template::create([
            "name" => "Titre de la 2ème section de la page 2 partie 2",
            "contain" => "and  discover the world",
        ]);

            // 40

        Template::create([
            "name" => "Bouton de la 2ème section de la page 2",
            "contain" => "Browse",
        ]);

            // Page 3

        Template::create([
            "name" => "Titre de la page 3",
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
            "name" => "page4_title",
            "contain" => "Contact"
        ]);
    }
}
