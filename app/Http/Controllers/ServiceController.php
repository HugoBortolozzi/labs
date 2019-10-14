<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Projet;

use App\Template;

class ServiceController extends Controller
{
    public function service(){
        $services = Service::all();
        $projets = Projet::all();      

        $templates = Template::all();
        return view ('services',compact('services',"projets","templates"));
    }
}
