<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Carousel;
use App\About;
use App\Testimonial;
use App\Service;
use App\Secservice;
use App\Team;
use App\Secteam;
use App\Promotion;
use App\Contact;
use App\Contactform;

class MainController extends Controller
{
    public function main(){
        $banner = Banner::find(1);
        $carousels = Carousel::all();
        $about = About::find(1);
        $testimonials = Testimonial::all();
        $services = Service::all();
        $secservice = Secservice::find(1);
        $teams = Team::all();
        $secteam = Secteam::find(1);
        $promotion = Promotion::find(1);
        $contact = Contact::find(1);
        $contactform = Contactform::find(1);
        return view ("main", compact('banner',"carousels","about","testimonials","services","secservice","teams","secteam","promotion","contact",'contactform'));
    }
}
