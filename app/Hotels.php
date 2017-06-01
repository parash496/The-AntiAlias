<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $fillable = ['name'];

    public function comments()
    {
    	return $this->hasMany(Comments::class);
    }
}
