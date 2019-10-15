<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;

class EditTemplateController extends Controller
{
    public function template(){
        return view('admin/template');
    }

    public function homepage(){
        $templates = Template::all();
        return view('admin/homepage',compact('templates'));
    }

    public function banner(){
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

        $messageBanner = $template ? "En-tête mis à jour" : "erreur lors de la modification de l'en-tête";
        session()->flash('messageBanner',$messageBanner);

        return redirect()->route('homepage');
    }

    public function section1(){
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

        $template->contain = request()->input('sec1_video');

        $template->save();

        $template = Template::find(12);

        $template->contain = request()->input('sec1_video_img');

        $template->save();

        $messageSec1 = $template ? "1ère section mise à jour" : "erreur lors de la modification de la 1ère section";
        session()->flash('messageSec1',$messageSec1);

        return redirect()->route('homepage');
    }

    public function section2(){
        $template = Template::find(13);

        $template->contain = request()->input('sec2_title');

        $template->save();

        $messageSec2 = $template ? "2ème section mise à jour" : "erreur lors de la modification de la 2ème section";
        session()->flash('messageSec2',$messageSec2);

        return redirect()->route('homepage');
    }

    public function section3(){
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

        $messageSec3 = $template ? "3ème section mise à jour" : "erreur lors de la modification de la 3ème section";
        session()->flash('messageSec3',$messageSec3);

        return redirect()->route('homepage');
    }

    public function section4(){
        $template = Template::find(18);

        $template->contain = request()->input('sec4_title_part1');

        $template->save();

        $template = Template::find(19);

        $template->contain = request()->input('sec4_title_span');

        $template->save();

        $template = Template::find(20);

        $template->contain = request()->input('sec4_title_part2');

        $template->save();

        $messageSec4 = $template ? "4ème section mise à jour" : "erreur lors de la modification de la 4ème section";
        session()->flash('messageSec4',$messageSec4);

        return redirect()->route('homepage');
    }

    public function section5(){
        $template = Template::find(21);

        $template->contain = request()->input('sec5_title');

        $template->save();

        $template = Template::find(22);

        $template->contain = request()->input('sec5_text');

        $template->save();

        $template = Template::find(23);

        $template->contain = request()->input('sec5_button');

        $template->save();

        $messageSec5 = $template ? "5ème section mise à jour" : "erreur lors de la modification de la 5ème section";
        session()->flash('messageSec5',$messageSec5);

        return redirect()->route('homepage');
    }

    public function section6(){
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

        $messageSec6 = $template ? "6ème section mise à jour" : "erreur lors de la modification de la 6ème section";
        session()->flash('messageSec6',$messageSec6);

        return redirect()->route('homepage');
    }

    public function formulaire(){
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

        $messageForm = $template ? "formulaire mis à jour" : "erreur lors de la modification du formulaire";
        session()->flash('messageForm',$messageForm);

        return redirect()->route('homepage');
    }
}
