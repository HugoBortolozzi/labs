<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Template;

class BlogController extends Controller
{
    public function blog(){
        $templates = Template::all();

        return view('blog',compact("templates"));
    }
    public function blog_post(){
        $templates = Template::all();

        return view('blog-post',compact('templates'));
    }
}
