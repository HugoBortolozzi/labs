<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Template;
use App\Categorie;
use App\User;
use App\Article;

class BlogController extends Controller
{
    public function blog(){
        $templates = Template::all();
        $categories = Categorie::all();

        return view('blog',compact("templates","categories"));
    }
    public function blog_post(){
        $templates = Template::all();
        $categories = Categorie::all();

        return view('blog-post',compact('templates',"categories"));
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
}
