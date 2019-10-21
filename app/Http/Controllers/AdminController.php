<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Testimonial;
use App\Projet;
use App\Message;
use App\Newsletter;
use App\User;

use App\Template;


class AdminController extends Controller
{
    // Partie User

    public function users(){
        $users = User::all();

        return view ('admin/users',compact('users'));
    }
    public function deleteUser($id){
        $user = User::find($id);

        $user->delete();
        $message = $user ? "Utilisateur supprimée" : "Erreur lors de la suppression de l'utilisateur";
        session()->flash('message',$message);

        return redirect()->route('adminUsers');
    }
    public function updateUser($id){
        $user = User::find($id);

        $user->role = request()->input('user_role');
        $user->save();

        $message = $user ? "Role de l'utilisateur modifié" : "Erreur lors de la modification du role de l'utilisateur";
        session()->flash('message',$message);

        return redirect()->route('adminUsers');
    }

    // Partie Testimonial

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

        // Partie Team

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
    public function leader($id){
        $teams = Team::all();
        $leader = Team::find($id);

        foreach($teams as $team){
            $team->leader = "non";
        }
        $leader->leader = "oui";
        $teams->save();

        $messageTeam = $teams ? "Leader de l'équipe mis à jour" : "Erreur lors de la modification du leader de l'équipe";
        session()->flash('messageTeam',$messageTeam);

        return redirect()->route('adminTeam');
    }

    // Partie Projet

    public function projet(){
        $projets = Projet::all();

        return view('admin/projet',compact('projets'));
    }
    public function editProjet($id){
        $projet = Projet::find($id);

        return view ('admin/crud/editProjet',compact('projet'));
    }

    public function updateProjet($id){
        $projet = Projet::find($id);

        $projet->name = request()->input('projet_name');
        $projet->text= request()->input('projet_text');

        $fileName= request()->file('projet_photo')->getClientOriginalName();
        $path= request()->file('projet_photo')->storeAs('projet',$fileName);

        $projet->photo = "storage/".$path;

        $projet->save();

        $messageProjet = $projet ? "Projet mis à jour" : "Erreur lors de la mise à jour du projet";
        session()->flash('messageProjet',$messageProjet);

        return redirect()->route('projet');
    }

    public function deleteProjet($id){
        $projet = Projet::find($id);
        $projet->delete();

        $messageProjet = $projet ? "Projet supprimé" : "Erreur lors de la suppression du projet";
        session()->flash('messageProjet',$messageProjet);

        return redirect()->route('projet');
    }
    public function newProjet(){
        return view('admin/crud/newProjet');
    }
    public function createProjet(){
        $projet = new Projet;

        $projet->name = request()->input('projet_name');
        $projet->text= request()->input('projet_text');

        $fileName= request()->file('projet_photo')->getClientOriginalName();
        $path= request()->file('projet_photo')->storeAs('projet',$fileName);

        $projet->photo = "storage/".$path;

        $projet->save();

        $messageProjet = $projet ? "Projet créé" : "Erreur lors de la création du projet";
        session()->flash('messageProjet',$messageProjet);

        return redirect()->route('projet');
    }

    // Partie Contact

    public function viewMessage(){
        $msgs = Message::all();
        return view('admin/messages',compact('msgs'));
    }
    public function deleteMessage($id){
        $msg = Message::find($id);
        $msg->delete();

        $message = $msg ? "Message supprimé" : "Erreur lors de la suppression du projet";
        session()->flash('message',$message);

        return redirect()->route('adminMessage');
    }
    public function viewNewsletter(){
        $newsletters = Newsletter::all();

        return view('admin/newsletter',compact('newsletters'));
    }
    public function deleteNewsletter($id){
        $newsletter = Newsletter::find($id);
        $newsletter->delete();

        $message = $newsletter ? "E-mail inscrit à la newsletter supprimé" : "Erreur lors de la suppression de l'email";
        session()->flash('message',$message);

        return redirect()->route('adminNewsletter');
    }
}
