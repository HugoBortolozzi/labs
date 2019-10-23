<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Database\Eloquent\Collection;

use App\User;
use App\Template;
use App\Categorie;
use App\Article;
use App\Comment;


class BlogController extends Controller
{
    public function blog(){
        $templates = Template::all();
        $categories = Categorie::all();
        $articles = Article::paginate(3);    
        
        return view('blog',compact("templates","categories",'articles'));
    }
    public function blog_post($id){
        $count = Comment::where('article_id',$id)->count();
        $comments = Comment::where('article_id',$id)->get();
        $article = Article::find($id);
        $templates = Template::all();
        $categories = Categorie::all();
        $author = User::where('id',$article->user_id);
        return view('blog-post',compact('templates',"categories","article","comments","author","count"));
    }
    public function categories($id){
        $articles = Article::where('categorie_id',$id)->paginate(3);
        $templates = Template::all();
        $categories = Categorie::all();

        if($articles->count() == 0){
            return view ('noArticle',compact("templates","categories","articles"));
        }

        return view('blog',compact("templates","categories",'articles'));
    }
    public function search(){
        $search = request()->input('search');
        $articles = Article::all()->paginate(3);
        // $tabs = Article::all();
        // $articles = [];
        // foreach($tabs as $tab){
        //     if(stripos($tab,$search){
        //         array_push($articles,$tab)
        //     });
        // };

        $templates = Template::all();
        $categories = Categorie::all();

        return view('blog',compact("templates","categories",'articles'));
    }
    public function authorArticles(){
        $users = User::where("role","editeur")->paginate(10);

        return view ('admin/authorArticle',compact('users'));
    }
    public function viewArticle($id){
        $articles = Article::where('user_id',$id)->paginate(3);
        $user = User::find($id);

        return view ('admin/myArticles',compact('articles',"user"));
    }
    public function newArticle(){
        $categories = Categorie::all();
        return view ('admin/crud/newArticle',compact('categories'));
    }
    public function createArticle(){
        $article = new Article;

        $article->name = request()->input('article_name');

        $fileName= request()->file('article_photo')->getClientOriginalName();
        $path= request()->file('article_photo')->storeAs('article',$fileName);

        $article->photo = "storage/".$path;

        $article->categorie_id = request()->input('article_categorie');
        $article->text1 = request()->input('article_text1');
        $article->text2 = request()->input('article_text2');
        $article->text3 = request()->input('article_text3');

        $fileName= request()->file('author_photo')->getClientOriginalName();
        $path= request()->file('author_photo')->storeAs('article',$fileName);

        $article->author_photo = "storage/".$path;
        $article->author_description = request()->input('author_description');
        $article->user_id = auth()->user()->id;

        $article->save();

        $message = $article ? "Votre article a bien été créé. IL doit maintenant attendre la validation d'un administateur" : "Erreur lors de la création de votre article";
        session()->flash('message',$article);

        return redirect()->route('adminArticle');
    }
    public function newCategorie(){
        return view ('admin/crud/newCategorie');
    }
    public function createCategorie(){
        $categorie = new Categorie;

        $categorie->name = request()->input('categorie_name');
        $categorie->save();

        $message = $categorie ? "La catégorie a bien été créé." : "Erreur lors de la création de la catégorie";
        session()->flash('message',$message);

        return redirect()->route('newArticle');
    }
    public function adminCategories(){
        $categories = Categorie::all();
        return view ('admin/categories',compact('categories'));
    }
    public function editCategorie($id){
        $categorie = Categorie::find($id);

        $categorie->name = request()->input('categorie_name');
        $categorie->save();

        $message = $categorie ? "La catégorie a bien été modifiée." : "Erreur lors de la modification de la catégorie";
        session()->flash('message',$message);

        return redirect()->route('adminCategories');
    }
    public function deleteCategorie($id){
        $categorie = Categorie::find($id);

        if($categorie->articles()->count() > 0){
            $message = "La catégorie ne peut pas être supprimé car certains articles en font partis";
        session()->flash('message',$message);

        return redirect()->route('adminCategories');
        }else{
            $categorie->delete();

            $message = $categorie ? "La catégorie a bien été supprimée." : "Erreur lors de la suppression de la catégorie";
            session()->flash('message',$message);

            return redirect()->route('adminCategories');
        }
    }
    public function newComment($id){
        // dd($request);
        $comment = new Comment;

        $comment->name = request()->input('name');
        $comment->email = request()->input('email');
        $comment->subject = request()->input('subject');
        $comment->comment = request()->input('comment');
        $comment->photo = "useless";
        $comment->article_id = $id;

        $comment->save();

        return redirect()->back();
    }
}
