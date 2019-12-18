<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $gurded = [];

    public function puzzle()
    {
        return $this->belongsTo('App\Puzzle');
    }
}
