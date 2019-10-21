<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $articles = Article::all();
        

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
    public function authorArticles(){
        $users = User::where("role","editeur")->get();

        return view ('admin/authorArticle',compact('users'));
    }
    public function viewArticle($id){
        $articles = Article::where('user_id',$id)->get();
        $user = User::find($id);

        return view ('admin/myArticles',compact('articles',"user"));
    }
    public function newArticle(){
        $categories = Categorie::all();
        return view ('admin/crud/newArticle',compact('categories'));
    }
    public function createArticle(){
        $article = new Article;

        $article->user_id = auth()->user()->id;
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
