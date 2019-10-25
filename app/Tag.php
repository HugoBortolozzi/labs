<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Link;

class Tag extends Model
{
    public function links(){
        return $this->belongsToMany(Article::class,'links',"article_id","tag_id")->using(Link::class);
    }
}
