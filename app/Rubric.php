<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
