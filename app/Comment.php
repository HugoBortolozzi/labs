<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Comment extends Model
{
    public function post(){
        return $this->belongsTo(Article::class);
    }
}
