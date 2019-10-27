<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;

class EditTemplateController extends Controller
{
    public function template(){
        return view('admin/template');
    }


        // Updaters de la page principale

    public function homepage(){
        $templates = Template::all();
        return view('admin/homepage',compact('templates'));
    }

        // Banner

    public function banner(Request $request){
        $validate = $request->validate([
            'main_title' => "required",
            'nav_logo' => "required",
            "banner_logo" => "required",
            "banner_text" => "required",
        ]);

        $template = Template::find(1);
        $template->contain = request()->input('main_title');
        $template->save();

        $template = Template::find(2);
        $template->contain = request()->input('nav_logo');
        $template->save();

        $template = Template::find(3);
        $template->contain = request()->input('banner_logo');
        $template->save();

        $template = Template::find(4);
        $template->contain = request()->input('banner_text');
        $template->save();

        $messageBanner = $template ? "En-tête mis à jour" : "Erreur lors de la modification de l'en-tête";
        session()->flash('messageBanner',$messageBanner);

        return redirect()->route('homepage');
    }

        // Section 1

    public function section1(Request $request){
        $validate = $request->validate([
            'sec1_title_part1' => "required",
            'sec1_title_span' => "required",
            "sec1_title_part2" => "required",
            "sec1_text1" => "required",
            "sec1_text2" => "required",
            'sec1_button' => "required",
        ]);

        $template = Template::find(5);
        $template->contain = request()->input('sec1_title_part1');
        $template->save();

        $template = Template::find(6);
        $template->contain = request()->input('sec1_title_span');
        $template->save();

        $template = Template::find(7);
        $template->contain = request()->input('sec1_title_part2');
        $template->save();

        $template = Template::find(8);
        $template->contain = request()->input('sec1_text1');
        $template->save();

        $template = Template::find(9);
        $template->contain = request()->input('sec1_text2');
        $template->save();

        $template = Template::find(10);
        $template->contain = request()->input('sec1_button');
        $template->save();

        $template = Template::find(11);
        if(request()->file('sec1_video')){
            $template->contain = request()->input('sec1_video');
            $template->save();
        }else{
            $template->contain = $template->contain;
            $template->save();
        }

        $template = Template::find(12);
        if(request()->file('sec1_video_img')){
            $template->contain = request()->input('sec1_video_img');
            $template->save();
        }else{
            $template->contain = $template->contain;
            $template->save();
        }
        

        $messageSec1 = $template ? "1ère section mise à jour" : "Erreur lors de la modification de la 1ère section";
        session()->flash('messageSec1',$messageSec1);

        return redirect()->route('homepage');
    }

        // Section 2

    public function section2(Request $request){
        $validate = $request->validate([
            'sec2_title' => "required",
            
        ]);

        $template = Template::find(13);
        $template->contain = request()->input('sec2_title');
        $template->save();

        $messageSec2 = $template ? "2ème section mise à jour" : "Erreur lors de la modification de la 2ème section";
        session()->flash('messageSec2',$messageSec2);

        return redirect()->route('homepage');
    }

        // Section 3

    public function section3(Request $request){
        $validate = $request->validate([
            'sec3_title_part1' => "required",
            'sec3_title_span' => "required",
            "sec3_title_part2" => "required",
            "sec3_button" => "required",
        ]);

        $template = Template::find(14);
        $template->contain = request()->input('sec3_title_part1');
        $template->save();

        $template = Template::find(15);
        $template->contain = request()->input('sec3_title_span');
        $template->save();

        $template = Template::find(16);
        $template->contain = request()->input('sec3_title_part2');
        $template->save();

        $template = Template::find(17);
        $template->contain = request()->input('sec3_button');
        $template->save();

        $messageSec3 = $template ? "3ème section mise à jour" : "Erreur lors de la modification de la 3ème section";
        session()->flash('messageSec3',$messageSec3);

        return redirect()->route('homepage');
    }


        // Section 4

    public function section4(Request $request){
        $validate = $request->validate([
            'sec4_title_part1' => "required",
            'sec4_title_span' => "required",
            "sec4_title_part2" => "required",
        ]);

        $template = Template::find(18);
        $template->contain = request()->input('sec4_title_part1');
        $template->save();

        $template = Template::find(19);
        $template->contain = request()->input('sec4_title_span');
        $template->save();

        $template = Template::find(20);
        $template->contain = request()->input('sec4_title_part2');
        $template->save();

        $messageSec4 = $template ? "4ème section mise à jour" : "Erreur lors de la modification de la 4ème section";
        session()->flash('messageSec4',$messageSec4);

        return redirect()->route('homepage');
    }


        // Section 5

    public function section5(Request $request){
        $validate = $request->validate([
            'sec5_title' => "required",
            'sec5_text' => "required",
            "sec5_button" => "required",
        ]);

        $template = Template::find(21);
        $template->contain = request()->input('sec5_title');
        $template->save();

        $template = Template::find(22);
        $template->contain = request()->input('sec5_text');
        $template->save();

        $template = Template::find(23);
        $template->contain = request()->input('sec5_button');
        $template->save();

        $messageSec5 = $template ? "5ème section mise à jour" : "Erreur lors de la modification de la 5ème section";
        session()->flash('messageSec5',$messageSec5);

        return redirect()->route('homepage');
    }


        // Section 6

    public function section6(Request $request){
        $validate = $request->validate([
            'sec6_title' => "required",
            'sec6_text' => "required",
            "sec6_sub_title" => "required",
            "sec6_string1" => "required",
            "sec6_string2" => "required",
            'sec6_string3' => "required",
            'sec6_string4' => "required",
        ]);
    
        $template = Template::find(24);
        $template->contain = request()->input('sec6_title');
        $template->save();

        $template = Template::find(25);
        $template->contain = request()->input('sec6_text');
        $template->save();

        $template = Template::find(26);
        $template->contain = request()->input('sec6_sub_title');
        $template->save();

        $template = Template::find(27);
        $template->contain = request()->input('sec6_string1');
        $template->save();

        $template = Template::find(28);
        $template->contain = request()->input('sec6_string2');
        $template->save();

        $template = Template::find(29);
        $template->contain = request()->input('sec6_string3');
        $template->save();

        $template = Template::find(30);
        $template->contain = request()->input('sec6_string4');
        $template->save();

        $messageSec6 = $template ? "6ème section mise à jour" : "Erreur lors de la modification de la 6ème section";
        session()->flash('messageSec6',$messageSec6);

        return redirect()->route('homepage');
    }


        // Formulaire

    public function formulaire(Request $request){
        $validate = $request->validate([
            'contactform_name' => "required",
            'contactform_mail' => "required",
            "contactform_subject" => "required",
            "contactform_message" => "required",
            "contactform_button" => "required",
            'contactform_target' => "required",
        ]);

        $template = Template::find(31);
        $template->contain = request()->input('contactform_name');
        $template->save();

        $template = Template::find(32);
        $template->contain = request()->input('contactform_mail');
        $template->save();

        $template = Template::find(33);
        $template->contain = request()->input('contactform_subject');
        $template->save();

        $template = Template::find(34);
        $template->contain = request()->input('contactform_message');
        $template->save();

        $template = Template::find(35);
        $template->contain = request()->input('contactform_button');
        $template->save();

        $template = Template::find(36);
        $template->contain = request()->input('contactform_target');
        $template->save();

        $messageForm = $template ? "formulaire mis à jour" : "Erreur lors de la modification du formulaire";
        session()->flash('messageForm',$messageForm);

        return redirect()->route('homepage');
    }

        // Page 2 

        // Section 1

    public function page2(){
        $templates = Template::all();

        return view('admin/page2',compact('templates'));
    }

    public function P2Title(Request $request){
        $validate = $request->validate([
            'page2_title' => "required",
        ]);

        $template = Template::find(37);
        $template->contain = request()->input('page2_title');
        $template->save();

        $messageSec2 = $template ? "2ème section mise à jour" : "Erreur lors de la modification de la 2ème section";
        session()->flash('messageSec2',$messageSec2);

        return redirect()->route('pageDeux');
    }

    // Section 2 

    public function P2sec2(Request $request){
        $validate = $request->validate([
            'page2_sec2_title_part1' => "required",
            'page2_sec2_title_span' => "required",
            "page2_sec2_title_part2" => "required",
            "page2_sec2_button" => "required",
            "page2_sec2_logo" => "required",
        ]);

        $template = Template::find(38);
        $template->contain = request()->input('page2_sec2_title_part1');
        $template->save();

        $template = Template::find(39);
        $template->contain = request()->input('page2_sec2_title_span');
        $template->save();

        $template = Template::find(40);
        $template->contain = request()->input('page2_sec2_title_part2');
        $template->save();

        $template = Template::find(41);
        $template->contain = request()->input('page2_sec2_button');
        $template->save();

        $template = Template::find(52);
        $template->contain = request()->input('page2_sec2_logo');
        $template->save();

        $messageSec2 = $template ? "2ème section mise à jour" : "erreur lors de la modification de la 2ème section";
        session()->flash('messageSec2',$messageSec2);

        return redirect()->route('pageDeux');
    }

    // Page 3

    public function page3(){
        
        $templates = template::all();

        return view('admin/page3',compact('templates'));
    }

    public function P3Title(Request $request){
        $validate = $request->validate([
            'page3_title' => "required",
        ]);

        $template = Template::find(42);
        $template->contain = request()->input('page3_title');
        $template->save();

        $messageTitle = $template ? "2ème section mise à jour" : "erreur lors de la modification de la 2ème section";
        session()->flash('messageTitle',$messageTitle);

        return redirect()->route('pageTrois');
    }

    public function P3Widget(Request $request){
        $validate = $request->validate([
            'page3_widget1_name' => "required",
            'page3_widget2_name' => "required",
            "page3_widget3_name" => "required",
            "page3_widget4_name" => "required",
            "page3_widget4_contain" => "required",
            "page3_widget5_name" => "required",
            "page3_widget5_img" => "required",
            "page3_widget5_path_link" => "required",
        ]);

        $template = Template::find(43);
        $template->contain = request()->input('page3_widget1_name');
        $template->save();

        $template = Template::find(44);
        $template->contain = request()->input('page3_widget2_name');
        $template->save();

        $template = Template::find(45);
        $template->contain = request()->input('page3_widget3_name');
        $template->save();

        $template = Template::find(46);
        $template->contain = request()->input('page3_widget4_name');
        $template->save();

        $template = Template::find(47);
        $template->contain = request()->input('page3_widget4_contain');
        $template->save();

        $template = Template::find(48);
        $template->contain = request()->input('page3_widget5_name');
        $template->save();

        $template = Template::find(49);
        $template->contain = request()->input('page3_widget5_img');
        $template->save();

        $template = Template::find(50);
        $template->contain = request()->input('page3_widget5_path_link');
        $template->save();

        $messageTitle = $template ? "Widgets mis à jour" : "erreur(s) lors de la modification des widgets";
        session()->flash('messageTitle',$messageTitle);

        return redirect()->route('pageTrois');
    }

    // Page 4 

    public function page4(){
        $template = Template::find(51);
        return view('admin/page4',compact('template'));
    }
    public function P4Title(Request $request){
        $validate = $request->validate([
            'page4_title' => "required",
        ]);

        $template = Template::find(51);
        $template->contain = request()->input('page4_title');
        $template->save();

        $messageTitle = $template ? "4ème section mise à jour" : "Erreur lors de la modification de la 4ème section";
        session()->flash('messageTitle',$messageTitle);

        return redirect()->route('pageQuatre');
    }
}
