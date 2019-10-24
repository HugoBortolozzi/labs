<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Categorie;
use App\Link;
use App\User;

class Article extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class,'categorie_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function links(){
        return $this->belongsToMany(Link::class,'links')->using(Link::class);
    }
}
