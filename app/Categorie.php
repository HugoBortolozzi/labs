<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Categorie extends Model
{
    public function articles(){
        return $this->hasMany(Article::class);
    }
}
