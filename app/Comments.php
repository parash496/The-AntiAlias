<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['user_id','hotels_id','review'];

    public function hotel()
    {
    	return $this->belongsTo(Hotels::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
