<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Carousel;
use App\About;
use App\Testimonial;
use App\Service;
use App\Secservice;

class MainController extends Controller
{
    public function main(){
        $banner = Banner::find(1);
        $carousels = Carousel::all();
        $about = About::find(1);
        $testimonials = Testimonial::all();
        $services = Service::all();
        $secservice = Secservice::find(1);
        return view ("main", compact('banner',"carousels","about","testimonials","services","secservice"));
    }
}
