<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $gurded = [];

    public function puzzles(){
        return $this->belongsToMany('App\Puzzle');
    }
}
