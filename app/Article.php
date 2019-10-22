<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Categorie;

class Article extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class,'categorie_id');
    }
}
