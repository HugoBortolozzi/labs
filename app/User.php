<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

Use App\Article;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function validNumbers(){
        $valid = [];
        $articles = Article::where("user_id",$this->id)->where("validate","oui")->get();
        foreach($articles as $article){
            array_push($valid,$article);
        }
        $validated = sizeof($valid);
        return $validated;
    }
    public function noValidNumbers(){
        $noValid = [];
        $articles = Article::where("user_id",$this->id)->where("validate","non")->get();
        foreach($articles as $article){
            array_push($noValid,$article);
        }
        $noValidated = sizeof($noValid);
        return $noValidated;
    }
    public function validArticles(){
        $valid = [];
        $articles = Article::where("user_id",$this->id)->where("validate","oui")->get();
        foreach($articles as $article){
            array_push($valid,$article);
        }
        return $valid;
    }
    public function noValidArticles(){
        $noValid = [];
        $articles = Article::where("user_id",$this->id)->where("validate","non")->get();
        foreach($articles as $article){
            array_push($noValid,$article);
        }
        return $noValid;
    }
}
