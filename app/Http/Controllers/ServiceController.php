<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Projet;

use App\Template;

class ServiceController extends Controller
{
    public function services(){
        $services = Service::all();
        $projets = Projet::all();

        $templates = Template::all();
        return view ('services',compact('services',"projets","templates"));
    }

    public function adminServices(){
        $services = Service::all();

        return view('admin/services',compact('services'));
    }
    public function edit($id){
        $service = Service::find($id);

        return view ('admin/crud/editService',compact('service'));
    }
    public function update($id){
        $service = Service::find($id);

        $service->title = request()->input('service_title');
        $service->logo = request()->input('service_logo');
        $service->text = request()->input('service_text');

        $service->save();

        $messageService = $service ? "Service mis à jour" : "Erreur lors de la modification du service";
        session()->flash('messageService',$messageService);

        return redirect()->route('adminServices');
    }
    public function delete($id){
        $service = Service::find($id);

        $service->delete();

        $messageService = $service ? "Service supprimée" : "Erreur lors de la suppression du service";
        session()->flash('messageService',$messageService);

        return redirect()->route('adminServices');
    }
    public function newService(){
        return view('admin/crud/newService');
    }
    public function create(){
        $service = new Service;

        $service->title = request()->input('service_title');
        $service->logo = request()->input('service_logo');
        $service->text = request()->input('service_text');

        $service->save();

        $messageService = $service ? "Service créé" : "Erreur lors de la création du service";
        session()->flash('messageService',$messageService);

        return redirect()->route('adminServices');
        }
}
