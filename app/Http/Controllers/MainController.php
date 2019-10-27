<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $allServices = Service::all();
        $randomServices = Service::all()->random(3);      

        $teams = Team::all();
        
        $templates = Template::all();
        return view ("main", compact("carousels","testimonials","allServices","teams","templates","randomServices"));
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

        $carousel->img = request('img');

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
