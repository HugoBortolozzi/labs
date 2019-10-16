<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Testimonial;
use App\Service;
use App\Team;

use App\Template;

class MainController extends Controller
{
    public function main(){
        $carousels = Carousel::all();
        $testimonials = Testimonial::all();
        $services = Service::all();
        $randomServices = Service::all()->random(3);      

        $teams = Team::all();
        
        $templates = Template::all();
        return view ("main", compact("carousels","testimonials","services","teams","templates","randomServices"));
    }
    public function contact(){

        $templates = Template::all();
        return view ('contact', compact('templates'));
    }
}
