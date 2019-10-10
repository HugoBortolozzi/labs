<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Carousel;
use App\About;

class MainController extends Controller
{
    public function main(){
        $banner = Banner::find(1);
        $carousels = Carousel::all();
        $about = About::find(1);
        return view ("main", compact('banner',"carousels","about"));
    }
}
