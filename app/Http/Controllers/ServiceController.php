<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

use App\Service;
use App\Projet;

use App\Template;

class ServiceController extends Controller
{
    public function services(){
        $allServices = Service::paginate(9);
        if(count(Projet::all())>2){
            $allProjets = Projet::inRandomOrder()->take(-3)->get();
        }else{
            $allProjets = Projet::inRandomOrder()->get();
        }
        if(count(Service::all())>5){
            $services = Service::all()->take(-6);
            $firstServices = $services->take(3);
            $lastServices = $services->take(-3);
        }else{
            $services = Service::all();
            $check = count($services);
            if($check % 2 == 0){
                $firstServices = $services->take($check/2);
                $lastServices = $services->take(-$check/2);
            }else{
                $firstServices = $services->take((($check-1)/2)+1);
                $lastServices = $services->take(-($check-1)/2);
            }
        }

        $templates = Template::all();
        return view ('services',compact('allServices',"allProjets","templates","firstServices","lastServices"));
    }

    public function adminServices(){
        $services = Service::all();

        return view('admin/services',compact('services'));
    }
    public function edit($id){
        $service = Service::find($id);

        return view ('admin/crud/editService',compact('service'));
    }
    public function update($id,Request $request){
        $validate = $request->validate([
            'service_title' => "required | unique:services,title",
            'service_logo' => "required",
            "service_text" => "required",
        ]);
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
    public function create(Request $request){
        $validate = $request->validate([
            'service_title' => "required | unique:services,title",
            'service_logo' => "required",
            "service_text" => "required",
        ]);
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
