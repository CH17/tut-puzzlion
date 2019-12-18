<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    protected $gurded = [];


    public function tags(){

        return $this->belongsToMany('App\Tag');

    }


    public function comments(){
        return $this->hasMany('App\Comment');
    }

}
