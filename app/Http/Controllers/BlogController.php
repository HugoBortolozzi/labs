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
use App\Tag;
use App\Link;
use App\Newsletter;

use Illuminate\Support\Facades\Mail;
use App\Mail\ArticleMail;
use App\Mail\NewArticleMail;
use App\Mail\ValidMail;

class BlogController extends Controller
{
    public function blog(){
        $templates = Template::all();       
        if(count(Categorie::all())>4){
            $categories = Categorie::all()->random(5);
        }else{
            $categories = Categorie::all();
        }
        $articles = Article::where("validate","oui")->paginate(3);
        if(count(Tag::all())>7){
            $tags = Tag::all()->random(8);
        }else{
            $tags = Tag::all();
        }
        $links = Link::all();    
        
        return view('blog',compact("templates","categories",'articles',"tags","links"));
    }
    public function blog_post($id){
        $count = Comment::where('article_id',$id)->count();
        $comments = Comment::where('article_id',$id)->get();
        $article = Article::find($id);
        if($article->validate == "oui"){
            $templates = Template::all();
            if(count(Categorie::all())>4){
                $categories = Categorie::all()->random(5);
            }else{
                $categories = Categorie::all();
            }
            if(count(Tag::all())>7){
                $tags = Tag::all()->random(8);
            }else{
                $tags = Tag::all();
            }
            $author = User::where('id',$article->user_id);
            $links = Link::all();
            return view('blog-post',compact('templates',"categories","article","comments","author","count", "tags","links"));
        }else{
            $fail = "Cet article n'est pas disponible actuellement pour les utilisateurs";
            return view ('noArticle',compact("templates","categories","articles","tags","links","fail"));
        }
        
    }
    public function categories($id){
        $articles = Article::where('categorie_id',$id)->where('validate',"oui")->paginate(3);
        $templates = Template::all();
        if(count(Categorie::all())>4){
            $categories = Categorie::all()->random(5);
        }else{
            $categories = Categorie::all();
        }
        if(count(Tag::all())>7){
            $tags = Tag::all()->random(8);
        }else{
            $tags = Tag::all();
        }
        $links = Link::all();

        if($articles->count() == 0){
            $fail = "Aucun article n'appartient à cette catégorie";
            return view ('noArticle',compact("templates","categories","articles","tags","links","fail"));
        }

        return view('blog',compact("templates","categories",'articles',"tags","links"));
    }
    public function tags($id){
        $links = Link::all();
        if(count(Tag::all())>7){
            $tags = Tag::all()->random(8);
        }else{
            $tags = Tag::all();
        }
        $templates = Template::all();
        if(count(Categorie::all())>4){
            $categories = Categorie::all()->random(5);
        }else{
            $categories = Categorie::all();
        }

        $searchs = Link::where('tag_id',$id)->get();

        $articles = [];

        foreach($searchs as $search){
            $article = Article::where('validate',"oui")->find($search->article_id);
            array_push($articles,$article);
        }

        if(count($articles) == 0){
            $fail = "Aucun article ne porte ce tag";
            return view ('noArticle',compact("templates","categories","articles","tags","links","fail"));
        }else{
            return view('tagArticles',compact("templates","categories",'articles',"tags","links"));
        }       
    }
    public function search(){
        $search = request()->input('search');
        $searchArticles = Article::where("validate","oui")->get();
        $articles = [];
        foreach($searchArticles as $searchArticle){
            if(stripos($searchArticle,$search)){
                array_push($articles,$searchArticle);
            };
        };

        $templates = Template::all();
        if(count(Categorie::all())>4){
            $categories = Categorie::all()->random(5);
        }else{
            $categories = Categorie::all();
        }
        if(count(Tag::all())>7){
            $tags = Tag::all()->random(8);
        }else{
            $tags = Tag::all();
        }
        $links = Link::all();

        if(count($articles) == 0){
            $fail = "Aucun article ne correspond à votre recherche";
            return view ('noArticle',compact("templates","categories","articles","tags","links","fail"));
        }else{
            return view('tagArticles',compact("templates","categories",'articles',"tags","links"));
        }   
    }
    public function authorArticles(){
        $users = User::all()->except('role','guest');

        return view ('admin/authorArticle',compact('users'));
    }
    public function viewArticle($id){
        $user = User::find($id);
        $articles = Article::where('user_id',$user->id)->where('validate',"oui")->paginate(3);
        
        $tags = Tag::all();
        $links = Link::all();

        return view ('admin/myArticles',compact('articles',"user","tags",'links'));
    }
    public function notValid($id){
        $user = User::find($id);
        $tags = Tag::all();
        $links = Link::all();
        $articles = Article::where('user_id',$user->id)->where('validate',"non")->paginate(3);
        if($user->role == "editeur" && $user->id == auth()->user()->id){
            return view ('admin/notValid',compact('articles',"user","tags",'links'));
        }else if (auth()->user()->role == "admin"){
            return view ('admin/notValid',compact('articles',"user","tags",'links'));
        }else{
            return redirect()->back();
        }
    }
    public function validArticle($id){
        $article = Article::find($id);
        $article->validate = "oui";
        $article->save();

        $author = User::find($article->user_id);

        $newsletters = Newsletter::all()->random(1);

        foreach($newsletters as $newsletter){
            $email = new ArticleMail($article);

            Mail::to($newsletter->email)->send($email);
        }

        $email = new ValidMail($article);

        Mail::to($author->email)->send($email);

        $message = $article ? "L'article a été validé. Il est maintenant visible par les utilisateurs" : "Erreur lors de la validation de l'article";
        session()->flash('message',$message);

        return redirect()->back();
    }
    public function unvalidArticle($id){
        $article = Article::find($id);
        $article->validate = "non";
        $article->save();

        $message = $article ? "L'article a été dévalidé. Il n'est maintenant plus visible par les utilisateurs" : "Erreur lors de la dévalidation de l'article";
        session()->flash('message',$message);

        return redirect()->back();
    }
    public function newArticle(){
        $categories = Categorie::all();
        $tags = Tag::all();
        return view ('admin/crud/newArticle',compact('categories','tags'));
    }
    public function deleteArticle($id){
        $article = Article::find($id);
        if($article->user_id === auth()->user()->id){
            $article->delete();
            $message = $article ? "Votre article a bien été supprimé.": "Erreur lors de la suppression de votre article";
            session()->flash('message',$message);
    
        }else{
            $message = "Erreur. Cet article ne vous appartient pas";
            session()->flash('message',$message);
    
        }
        
        return redirect()->back();
    }
    public function editArticle($id){
        $article = Article::find($id);
        if($article->user_id === auth()->user()->id){
            $articleTags = $article->links()->get();
            $categories = Categorie::all();
            $allTags = Tag::all();

            $noTags = $allTags->diff($articleTags);
            $articleTags = $allTags->diff($noTags);
            
            return view ('admin/crud/editArticle',compact('article',"categories","articleTags","noTags"));
        }else{
            $message = "Erreur. Cet article ne vous appartient pas";
            session()->flash('message',$message);
            
            return redirect()->back();
        }
    }
    public function updateArticle($id,Request $request){
        $validate = $request->validate([
            'article_name' => "required",
            "article_categorie" => "required",
            "article_text1" => "required",
            "article_text2" => "required",
            "article_text3" => "required",
            "author_description" => "required",
        ]);

        $article = Article::find($id);
        if($article->user_id === auth()->user()->id){
            $tags = Tag::all();
            $links = Link::all();

            $article->name = request()->input('article_name');

            if(request()->file('article_photo')){
                $fileName= request()->file('article_photo')->getClientOriginalName();
                $path= request()->file('article_photo')->storeAs('article',$fileName);

                $article->photo = "storage/".$path;
            }else{
                $article->photo = $article->photo;
            }

            $article->categorie_id = request()->input('article_categorie');
            $article->text1 = request()->input('article_text1');
            $article->text2 = request()->input('article_text2');
            $article->text3 = request()->input('article_text3');

            if(request()->file('author_photo')){
                $fileName= request()->file('author_photo')->getClientOriginalName();
                $path= request()->file('author_photo')->storeAs('article',$fileName);

                $article->author_photo = "storage/".$path;
            }else{
                $article->author_photo = $article->author_photo;
            }


            $article->author_description = request()->input('author_description');
            $article->user_id = auth()->user()->id;

            $article->validate = "non";

            $article->save();

            $article->links()->detach();


            foreach($tags as $tag){
                if(request($tag->name)){
                    // $link = new Link;
                    // $link->tag_id = request()->input($tag->name);
                    // $link->article_id = $article->id;
                    // $link->save();
                    $article->links()->attach($tag);
                }       
            };

            $author = User::find($article->user_id);

            $email = new NewArticleMail($article,$author);

            $user = User::all()->where('role','admin')->take(1);

            Mail::to($user[0]->email)->send($email);

            $message = $article ? "Votre article a bien été modifié. IL doit maintenant attendre la validation d'un administateur" : "Erreur lors de la modification de votre article";
            session()->flash('message',$message);


            if(auth()->user()->role === "admin"){
                return redirect()->route('adminArticle');
            }else{
                return redirect()->route('myArticles');
            }
            }else{
                $message = "Erreur. Cet article ne vous appartient pas";
                session()->flash('message',$message);

                return redirect()->back();
            }
        
    }
    public function createArticle(Request $request){
        $validate = $request->validate([
            'article_name' => "required",
            'article_photo' => "required",
            "article_categorie" => "required",
            "article_text1" => "required",
            "article_text2" => "required",
            "article_text3" => "required",
            "author_photo" => "required",
            "author_description" => "required",
        ]);

        $article = new Article;
        $tags = Tag::all();

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

        $article->validate = "non";

        $article->save();

        foreach($tags as $tag){
            if(request($tag->name)){
                $link = new Link;
                $link->tag_id = request()->input($tag->name);
                $link->article_id = $article->id;
                $link->save();
            }       
        };

        $author = User::find($article->user_id);

        $email = new NewArticleMail($article,$author);
        $user = User::all()->where('role','admin')->take(1);
        Mail::to($user[0]->email)->send($email);


        $message = $article ? "Votre article a bien été créé. IL doit maintenant attendre la validation d'un administateur" : "Erreur lors de la création de votre article";
        session()->flash('message',$message);

        return redirect()->route('adminArticle');
    }
    public function newCategorie(){
        return view ('admin/crud/newCategorie');
    }
    public function createCategorie(Request $request){
        $validate = $request->validate([
            'categorie_name' => "required | unique:categories,name",
        ]);
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
    public function editCategorie($id,Request $request){
        $validate = $request->validate([
            'categorie_name' => "required | unique:categories,name",
        ]);

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
    public function adminTags(){
        $tags = Tag::all();
        return view ('admin/tags',compact('tags'));
    }
    public function editTag($id,Request $request){
        $validate = $request->validate([
            'tag_name' => "required | unique:tags,name",
        ]);

        $tag = Tag::find($id);

        $tag->name = request()->input('tag_name');
        $tag->save();

        $message = $tag ? "Le tag a bien été modifiée." : "Erreur lors de la modification du tag";
        session()->flash('message',$message);

        return redirect()->route('adminTags');
    }
    public function deleteTag($id){
        $tag = Tag::find($id);

        if($tag->links()->count() > 0){
            $message = "Le tag ne peut pas être supprimé car certains articles en font partis";
        session()->flash('message',$message);

        return redirect()->route('adminTags');
        }else{
            $tag->delete();

            $message = $tag ? "Le tag a bien été supprimée." : "Erreur lors de la suppression du tag";
            session()->flash('message',$message);

            return redirect()->route('adminTags');
        }
    }
    public function newTag(){
        return view('admin/crud/newTag');
    }
    public function createTag(Request $request){
        $validate = $request->validate([
            'tag_name' => "required | unique:tags,name",
        ]);

        $tag = new Tag;
        $tag->name = request()->input('tag_name');
        $tag->save();

        return redirect()->route('newArticle');
    }
    public function newComment($id,Request $request){
        $validate = $request->validate([
            'name' => "required",
            'email' => "required",
            'subject' => "required",
            'comment' => "required",
        ]);
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
