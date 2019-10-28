<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = [];
    public function cryptocurrency(){
        return $this->belongsTo(Cryptocurrency::class);
    }
}
