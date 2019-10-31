<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Testimonial;
use App\Projet;
use App\Message;
use App\Newsletter;
use App\User;
use App\Tag;
use App\Link;
use App\Article;

use App\Template;


class AdminController extends Controller
{
    public function admin(){
        $role = auth()->user()->role;

        return view('home',compact('role'));
    }
    public function myProfil(){
        $user = auth()->user();
        return view ('admin/myProfil',compact('user'));
    }
    public function editProfil(){
        $user = auth()->user();
        return view ('admin/crud/editProfil',compact('user'));
    }
    public function myArticles(){
        $user = auth()->user();
        $articles = Article::where('user_id',$user->id)->where('validate',"oui")->paginate(3);
        $tags = Tag::all();
        $links = Link::all();

        return view ('admin/myArticles',compact('articles',"user","tags",'links'));
    }
    public function updateProfil(Request $request){
        $validate = $request->validate([
            'user_name' => "required",
            'user_email' => "required | email | unique:users,email ",
        ]);

        $user = auth()->user();
        $user->name = request()->input('user_name');
        if(request()->file('user_photo')){
            $fileName= request()->file('user_photo')->getClientOriginalName();
            $path= request()->file('user_photo')->storeAs('user',$fileName);

            $user->photo = "storage/".$path;
        }else{
            $user->photo = $user->photo;
        }

        $user->email = request()->input('user_email');
        if(request()->input('user_password') && request()->input('confirm_password')){
            if(request()->input('user_password')===request()->input('confirm_password')){
                $user->password = bcrypt(request()->input('user_password'));
                $user->save();
    
                $message = $user ? "Utilisateur créé" : "Erreur lors de la création de l'utilisateur";
                session()->flash('message',$message);
    
                return redirect()->route('myProfil');
            }else{
                $user->password = $user->password;
                $message = "Les deux mots de passes doivent être identiques";
                session()->flash('message',$message);
    
                return redirect()->route('editProfil');
            }
        }else{
            $user->password = $user->password;
            $user->save();
    
            $message = $user ? "Utilisateur créé" : "Erreur lors de la création de l'utilisateur";
            session()->flash('message',$message);

            return redirect()->route('myProfil');
        }
    }

    // Partie User

    public function users(){
        $users = User::all();

        return view ('admin/users',compact('users'));
    }
    public function deleteUser($id){
        $user = User::find($id);

        if($user = auth()->user()){
            $message = "Vous ne pouvez pas vous supprimer vous-même";
            session()->flash('message',$message);
    
            return redirect()->route('adminUsers'); 
        }

        $user->delete();
        $message = $user ? "Utilisateur supprimée" : "Erreur lors de la suppression de l'utilisateur";
        session()->flash('message',$message);

        return redirect()->route('adminUsers');
    }
    public function updateUser($id){
        $user = User::find($id);

        if($user == auth()->user()){
            $message = "Vous ne pouvez pas modifier votre propre role";
            session()->flash('message',$message);

            return redirect()->route('adminUsers');
        }else{
            $user->role = request()->input('user_role');
            $user->save();

            $message = $user ? "Role de l'utilisateur modifié" : "Erreur lors de la modification du role de     l'utilisateur";
            session()->flash('message',$message);

            return redirect()->route('adminUsers');
        }     
    }
    public function newUser(){
        return view ('admin/crud/newUser');
    }
    public function createUser(Request $request){
        $validate = $request->validate([
            'user_name' => "required",
            'user_email' => "required | unique:users,email",
            "user_password" => "required | min:8",
            "confirm_password" => "required | min:8",
        ]);

        $users = User::all();

        $user = new User;

        $user->role = "guest";
        $user->name = request()->input('user_name');
        $user->email = request()->input("user_email");

        if(request()->file('user_photo')){
            $fileName= request()->file('user_photo')->getClientOriginalName();
            $path= request()->file('user_photo')->storeAs('user',$fileName);

            $user->photo = "storage/".$path;
        }else{
            $user->photo = "img/team/john-doe-m4avhdgd3zuctzyxm1gtdulz1hvck28fatlza51c7k.png";
        }

        if(request()->input('user_password')===request()->input('confirm_password')){
            $user->password = bcrypt(request()->input('user_password'));
            $user->save();

            $message = $user ? "Utilisateur créé" : "Erreur lors de la création de l'utilisateur";
            session()->flash('message',$message);

            return redirect()->route('adminUsers');
        }else{
            $message = "Les deux mots de passes doivent être identiques";
            session()->flash('message',$message);

            return redirect()->route('newUser');
        }
    }

    // Partie Testimonial

    public function testimonials(){
        if(count(Testimonial::all())>5){
            $testimonials = Testimonial::all()->random(6);;
        }else{
            $testimonials = Testimonial::all();
        }

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
    public function updateTestimonial($id,Request $request){
        $validate = $request->validate([
            'testimonial_name' => "required",
            "testimonial_text" => "required",
            "testimonial_post" => "required",
        ]);
        $testimonial = Testimonial::find($id);

        $testimonial->name = request()->input('testimonial_name');
        if(request()->file('testimonial_photo')){
            $fileName= request()->file('testimonial_photo')->getClientOriginalName();
            $path= request()->file('testimonial_photo')->storeAs('testimonial',$fileName);

            $testimonial->photo = "storage/".$path;
        }else{
            $testimonial->photo = $testimonial->photo;
        }
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
    public function createTestimonial(Request $request){
        $validate = $request->validate([
            'testimonial_name' => "required",
            "testimonial_text" => "required",
            "testimonial_post" => "required",
            "testimonial_photo" => "required | image",
        ]);
        $testimonial = new Testimonial;

        $testimonial->name = request()->input('testimonial_name');
        
        $fileName= request()->file('testimonial_photo')->getClientOriginalName();
        $path= request()->file('testimonial_photo')->storeAs('testimonial',$fileName);
        $testimonial->photo = "storage/".$path;
        
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
    public function updateTeam($id,Request $request){
        $validate = $request->validate([
            'team_name' => "required",
            "team_post" => "required",
        ]);

        $team = Team::find($id);

        $team->name = request()->input('team_name');
        if(request()->file('team_photo')){
            $fileName= request()->file('team_photo')->getClientOriginalName();
            $path= request()->file('team_photo')->storeAs('team',$fileName);

            $team->photo = "storage/".$path;
        }else{
            $team->photo = $team->photo;
        }
        $team->post = request()->input('team_post');

        $team->save();

        $messageTeam = $team ? "Membre de l'équipe mis à jour" : "Erreur lors de la modification du membre de l'équipe";
        session()->flash('messageTeam',$messageTeam);

        return redirect()->route('adminTeam');
    }
    public function deleteTeam($id){
        $team = Team::find($id);

        if($team->leader == "oui"){
            $messageTeam = "Le leader ne peut pas être supprimé";
            session()->flash('messageTeam',$messageTeam);

            return redirect()->route('adminTeam');
        }else{
            $team->delete();

        $messageTeam = $team ? "Membre de l'équipe supprimé" : "Erreur lors de la suppression du membre de l'équipe";
        session()->flash('messageTeam',$messageTeam);

        return redirect()->route('adminTeam');
        }   
    }
    public function newTeam(){
        return view('admin/crud/newTeam');
    }
    public function createTeam(Request $request){
        $validate = $request->validate([
            'team_name' => "required",
            "team_post" => "required",
            "team_photo" => "required | image",
        ]);
        
        $team = new Team;

        $team->name = request()->input('team_name');
    
        $fileName= request()->file('team_photo')->getClientOriginalName();
        $path= request()->file('team_photo')->storeAs('team',$fileName);
        $team->photo = "storage/".$path;
        
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

    public function updateProjet($id,Request $request){
        $validate = $request->validate([
            'projet_name' => "required | unique:projets,name",
            'projet_text' => "required",
        ]);

        $projet = Projet::find($id);

        $projet->name = request()->input('projet_name');
        $projet->text= request()->input('projet_text');
        if(request()->file('projet_photo')){
            $fileName= request()->file('projet_photo')->getClientOriginalName();
            $path= request()->file('projet_photo')->storeAs('projet',$fileName);

            $projet->photo = "storage/".$path;
        }else{
            $projet->photo = $projet->photo;
        }

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
    public function createProjet(Request $request){
        $validate = $request->validate([
            'projet_name' => "required | unique:projets,name",
            'projet_text' => "required",
            'projet_photo' => "required | image",
        ]);

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
