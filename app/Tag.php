<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Link;

class Tag extends Model
{
    public function links(){
        return $this->hasMany(Link::class);
    }
}
