<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Secservice;
use App\Projet;
use App\Contact;
use App\Contactform;

class ServiceController extends Controller
{
    public function service(){
        $services = Service::all();
        $projets = Projet::all();      
        $secservice = Secservice::find(1);
        $contact = Contact::find(1);
        $contactform = Contactform::find(1);
        return view ('services',compact('services',"secservice","projets","contact","contactform"));
    }
}
