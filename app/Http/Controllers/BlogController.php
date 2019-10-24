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


class BlogController extends Controller
{
    public function blog(){
        $templates = Template::all();
        $categories = Categorie::all();
        $articles = Article::paginate(3);
        $tags = Tag::all();
        $links = Link::all();    
        
        return view('blog',compact("templates","categories",'articles',"tags","links"));
    }
    public function blog_post($id){
        $count = Comment::where('article_id',$id)->count();
        $comments = Comment::where('article_id',$id)->get();
        $article = Article::find($id);
        $templates = Template::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        $author = User::where('id',$article->user_id);
        $links = Link::all();
        return view('blog-post',compact('templates',"categories","article","comments","author","count","tags","links"));
    }
    public function categories($id){
        $articles = Article::where('categorie_id',$id)->paginate(3);
        $templates = Template::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        $links = Link::all();

        if($articles->count() == 0){
            return view ('noArticle',compact("templates","categories","articles","tags","links"));
        }

        return view('blog',compact("templates","categories",'articles',"tags","links"));
    }
    public function tags($id){
        $links = Link::all();
        $tags = Tag::all();
        $templates = Template::all();
        $categories = Categorie::all();

        $searchs = Link::where('tag_id',$id)->get();

        $articles = [];

        foreach($searchs as $search){
            $article = Article::find($search->article_id);
            array_push($articles,$article);
        }

        if(count($articles) == 0){
            return view ('noArticle',compact("templates","categories","articles","tags","links"));
        }else{
            return view('tagArticles',compact("templates","categories",'articles',"tags","links"));
        }       
    }
    public function search(){
        $search = request()->input('search');
        $searchArticles = Article::all();
        $articles = [];
        foreach($searchArticles as $searchArticle){
            if(stripos($searchArticle,$search)){
                array_push($articles,$searchArticle);
            };
        };

        $templates = Template::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        $links = Link::all();

        if(count($articles) == 0){
            return view ('noArticle',compact("templates","categories","articles","tags","links"));
        }else{
            return view('tagArticles',compact("templates","categories",'articles',"tags","links"));
        }   
    }
    public function authorArticles(){
        $users = User::all()->except('role','guest');

        return view ('admin/authorArticle',compact('users'));
    }
    public function viewArticle($id){
        $articles = Article::where('user_id',$id)->paginate(3);
        $user = User::find($id);
        $tags = Tag::all();
        $links = Link::all();

        return view ('admin/myArticles',compact('articles',"user","tags",'links'));
    }
    public function newArticle(){
        $categories = Categorie::all();
        $tags = Tag::all();
        return view ('admin/crud/newArticle',compact('categories','tags'));
    }
    public function deleteArticle($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->back();
    }
    public function editArticle($id){
        $article = Article::find($id);
        $articleTags = $article->links()->get();
        $categories = Categorie::all();
        $allTags = Tag::all();

        $noTags = $allTags->diff($articleTags);
        $articleTags = $allTags->diff($noTags);
        

        return view ('admin/crud/editArticle',compact('article',"categories","articleTags","noTags"));
    }
    public function updateArticle($id){
        $article = Article::find($id);
        $tags = Tag::all();
        $links = Link::all();

        $article->name = request()->input('article_name');

        // $fileName= request()->file('article_photo')->getClientOriginalName();
        // $path= request()->file('article_photo')->storeAs('article',$fileName);

        // $article->photo = "storage/".$path;
        $article->photo = request()->file('article_photo');

        $article->categorie_id = request()->input('article_categorie');
        $article->text1 = request()->input('article_text1');
        $article->text2 = request()->input('article_text2');
        $article->text3 = request()->input('article_text3');

        // $fileName= request()->file('author_photo')->getClientOriginalName();
        // $path= request()->file('author_photo')->storeAs('article',$fileName);

        // $article->author_photo = "storage/".$path;
        $article->author_photo = request()->file('author_photo');
        $article->author_description = request()->input('author_description');
        $article->user_id = auth()->user()->id;

        $article->save();

        // $article->links()->detach();

        // $deletes = Link::where('article_id',$id)->get();

        dd($article->links);

        // foreach($deletes as $delete){

        //     $delete->delete();
        // }


        foreach($tags as $tag){
            if(request($tag->name)){
                $link = new Link;
                $link->tag_id = request()->input($tag->name);
                $link->article_id = $article->id;
                $link->save();
            }       
        };

        $message = $article ? "Votre article a bien été modifié. IL doit maintenant attendre la validation d'un administateur" : "Erreur lors de la modification de votre article";
        session()->flash('message',$article);

        return redirect()->route('adminArticle');
    }
    public function createArticle(){
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

        $article->save();

        foreach($tags as $tag){
            if(request($tag->name)){
                $link = new Link;
                $link->tag_id = request()->input($tag->name);
                $link->article_id = $article->id;
                $link->save();
            }       
        };

        $message = $article ? "Votre article a bien été créé. IL doit maintenant attendre la validation d'un administateur" : "Erreur lors de la création de votre article";
        session()->flash('message',$message);

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
    public function adminTags(){
        $tags = Tag::all();
        return view ('admin/tags',compact('tags'));
    }
    public function editTag($id){
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
    public function createTag(){
        $tag = new Tag;
        $tag->name = request()->input('tag_name');
        $tag->save();

        return redirect()->route('newArticle');
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
