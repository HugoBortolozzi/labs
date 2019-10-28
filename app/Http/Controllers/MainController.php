<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Database\Eloquent\Collection;

use App\Carousel;
use App\Testimonial;
use App\Service;
use App\Team;
use App\Message;
use App\Newsletter;

use App\Template;

class MainController extends Controller
{
    public function main(){
        $carousels = Carousel::all();
        $testimonials = Testimonial::all();
        if(count(Service::all())>8){
            $allServices = Service::all()->random(9);
        }else{
            $allServices = Service::all();
        }
        if(count(Service::all())>2){
            $randomServices = Service::all()->random(3); ;
        }else{
            $randomServices = Service::all();
        }    

        // $teams = Team::all();
        if(count(Team::all())>2){
            $teams = Team::where("leader","non")->get()->random(2);
            $team1 = $teams->take(-1)->random();
            $team3 = $teams->take(1)->random();
        }else if(count(Team::all())==2){
            $team1 = Team::where("leader","non")->random();
            $team3->name = "John Doe";
            $team3->post = "Unknown";
            $team3->photo = "img/team/john-doe-m4avhdgd3zuctzyxm1gtdulz1hvck28fatlza51c7k.png";
        }else{
            $team1->name = "John Doe";
            $team1->post = "Unknown";
            $team1->photo = "img/team/john-doe-m4avhdgd3zuctzyxm1gtdulz1hvck28fatlza51c7k.png";
            $team3->name = "John Doe";
            $team3->post = "Unknown";
            $team3->photo = "img/team/john-doe-m4avhdgd3zuctzyxm1gtdulz1hvck28fatlza51c7k.png";
        }


        $team2 = Team::where("leader","oui")->get()->random();
        
        $templates = Template::all();
        return view ("main", compact("carousels","testimonials","allServices","team1","team2","team3","templates","randomServices"));
    }
    public function contact(){

        $templates = Template::all();
        return view ('contact', compact('templates'));
    }
    public function carousel(){
        $carousels = Carousel::all();

        return view ('admin/carousel',compact('carousels'));
    }
    public function updateCarousel($id,Request $request){
        $validate = $request->validate([
            'img' => "required",
        ]);
        $carousel = Carousel::find($id);

        $fileName= request()->file('img')->getClientOriginalName();
       $path= request()->file('img')->storeAs('carousel',$fileName);

       $carousel->img = "storage/".$path;

        $carousel->save();

        $messageCarousel = $carousel ? "Image du carousel modifiée" : "Erreur lors de la modification de l'image";
        session()->flash('messageCarousel',$messageCarousel);

        return redirect()->route('carousel');
    }
    public function deleteCarousel($id){
        $carousel = Carousel::find($id);

        $carousel->delete();

        $messageCarousel = $carousel ? "Image du carousel supprimée" : "Erreur lors de la suppression de l'image";
        session()->flash('messageCarousel',$messageCarousel);

        return redirect()->route('carousel');
    }
    public function newCarousel(){
        return view ('admin/crud/newCarousel');
    }
    public function createCarousel(Request $request){
        $validate = $request->validate([
            'img' => "required",
        ]);
        $carousel = new Carousel;

        $fileName= request()->file('img')->getClientOriginalName();
       $path= request()->file('img')->storeAs('carousel',$fileName);

       $carousel->img = "storage/".$path;

        $carousel->save();

        $messageCarousel = $carousel ? "Image du carousel rajoutée" : "Erreur lors du rajout de l'image";
        session()->flash('messageCarousel',$messageCarousel);

        return redirect()->route('carousel');
    }

    // Partie Message

    public function newMessage(Request $request){
        $validate = $request->validate([
            'name' => "required",
            'email' => "required",
            "subject" => "required",
            "message" => "required",
        ]);

        $msg = new Message;

        $msg->name = request()->input('name');
        $msg->email = request()->input('email');
        $msg->subject = request()->input('subject');
        $msg->contain = request()->input('message');

        $msg->save();

        $message = $msg ? "Message enregistré" : "Erreur lors de l'envoi du message";
        session()->flash('message',$message);



        // Mail::to('test@gmail.com')->send(new contactMail);

        return redirect()->route('main');
    }

    public function newsletter(Request $request){
        $validate = $request->validate([
            'email' => "required",
        ]);
        $newsletter = new Newsletter;

        $newsletter->email = request()->input('email');
        $newsletter->save();

        // Mail::to('test@gmail.com')->send(new contactMail);

        return redirect()->route('main');
    }

    // Partie users

    public function inscription(){
        $templates = Template::all();
        return view('inscription',compact('templates'));
    }
}
