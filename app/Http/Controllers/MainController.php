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

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\NewsletterMail;

use App\Template;

class MainController extends Controller
{
    public function main(){
        $carousels = Carousel::all();
        $testimonials = Testimonial::all();
        $allServices = Service::paginate(9);
        if(count(Service::all())>2){
            $randomServices = Service::all()->random(3); ;
        }else{
            $randomServices = Service::all();
        }    
        
        $teams = Team::all();
        if(count(Team::all())>2){
            $teams = Team::where("leader","non")->get()->random(2);
            $team1 = $teams->take(-1)->random();
            $team3 = $teams->take(1)->random();
        }else if(count(Team::all())==2){
            $team1 = Team::where("leader","non")->get();
        }

        $team2 = Team::where("leader","oui")->get()->random();
        
        $templates = Template::all();
        return view ("main", compact("carousels","testimonials","allServices","teams","team1","team2","team3","templates","randomServices"));
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
            'email' => "required | email",
            "subject" => "required",
            "message" => "required",
        ]);

        $msg = new Message;

        $msg->name = request()->input('name');
        $msg->email = request()->input('contact_email');
        $msg->subject = request()->input('subject');
        $msg->contain = request()->input('message');

        $msg->save();

        $message = $msg ? "Message enregistré" : "Erreur lors de l'envoi du message";
        session()->flash('message',$message);


        $email = new ContactMail($msg);

        Mail::to($msg->email)->send($email);

        return redirect()->to(route('main').'#con_form');
    }

    public function newsletter(Request $request){
        $validate = $request->validate([
            'newsletter_email' => "required | email | unique:newsletters,email",
        ]);
        $newsletter = new Newsletter;

        $newsletter->email = request()->input('newsletter_email');
        $newsletter->save();

        $email = new NewsletterMail();

        Mail::to($newsletter->email)->send($email);

        $messageNewsletter = $newsletter ? "Vous êtes bien inscrit à la newsletter" : "Erreur lors de l'inscription à la newsletter";
        session()->flash('messageNewsletter',$messageNewsletter);

        return redirect()->back();
    }

    // Partie users

    public function inscription(){
        $templates = Template::all();
        return view('inscription',compact('templates'));
    }
}
