<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Article;
use App\Tag;

class Link extends Pivot
{
    // public function article(){
    //     return $this->belongsTo(Article::class,'article_id');
    // }
    // public function tag(){
    //     return $this->belongsTo(Tag::class,'tag_id');
    // }
    protected $table='links';
}
