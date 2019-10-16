<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Testimonial;

use App\Template;


class AdminController extends Controller
{
    public function testimonials(){
        $testimonials = Testimonial::all();

        return view ('admin/testimonials',compact('testimonials'));
    }

    public function deleteTestimonial($id){
        $testimonial = Testimonial::find($id);

        $testimonial->delete();

        $messageTestimonial = $testimonial ? "Témoignage supprimée" : "Erreur lors de la suppression du témoignage";
        session()->flash('messageTestimonial',$messageTestimonial);

        return redirect()->route('adminTestimonials');
    }
    public function editTestimonial($id){
        $testimonial = Testimonial::find($id);

        return view ('admin/crud/editTestimonial',compact('testimonial'));
    }
    public function updateTestimonial($id){
        $testimonial = Testimonial::find($id);

        $testimonial->name = request()->input('testimonial_name');
        $testimonial->photo = request('testimonial_photo');
        $testimonial->text = request()->input('testimonial_text');
        $testimonial->post = request()->input('testimonial_post');

        $testimonial->save();

        $messageTestimonial = $testimonial ? "Témoignage mis à jour" : "Erreur lors de la modification du témoignage";
        session()->flash('messageTestimonial',$messageTestimonial);

        return redirect()->route('adminTestimonials');
    }
    public function newTestimonial(){
        return view('admin/crud/newTestimonial');
    }
    public function createTestimonial(){
        $testimonial = new Testimonial;

        $testimonial->name = request()->input('testimonial_name');
        $testimonial->photo = request()->input('testimonial_photo');
        $testimonial->text = request()->input('testimonial_text');
        $testimonial->post = request()->input('testimonial_post');

        $testimonial->save();

        $messageTestimonial = $testimonial ? "Témoignage créé" : "Erreur lors de la création du témoignage";
        session()->flash('messageTestimonial',$messageTestimonial);

        return redirect()->route('adminTestimonials');
    }
    public function team(){
        $teams = Team::all();

        return view ('admin/team',compact('teams'));
    }
    public function editTeam($id){
        $team = Team::find($id);

        return view ('admin/crud/editTeam',compact('team'));
    }
    public function updateTeam($id){
        $team = Team::find($id);

        $team->name = request()->input('team_name');
        $team->photo = request()->input('team_photo');
        $team->post = request()->input('team_post');

        $team->save();

        $messageTeam = $team ? "Membre de l'équipe mis à jour" : "Erreur lors de la modification du membre de l'équipe";
        session()->flash('messageTeam',$messageTeam);

        return redirect()->route('adminTeam');
    }
    public function deleteTeam($id){
        $team = Team::find($id);

        $team->delete();

        $messageTeam = $team ? "Membre de l'équipe supprimé" : "Erreur lors de la suppression du membre de l'équipe";
        session()->flash('messageTeam',$messageTeam);

        return redirect()->route('adminTeam');
    }
    public function newTeam(){
        return view('admin/crud/newTeam');
    }
    public function createTeam(){
        $team = new Team;

        $team->name = request()->input('team_name');
        $team->photo = request()->input('team_photo');
        $team->post = request()->input('team_post');

        $team->save();

        $messageTeam = $team ? "Membre de l'équipe créé" : "Erreur lors de la création du membre de l'équipe";
        session()->flash('messageTeam',$messageTeam);

        return redirect()->route('adminTeam');
    }
}
