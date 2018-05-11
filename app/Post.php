<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
	return $this->belongsTo(User::Class);
    }

    public function tagmap(){
	return $this->hasMany(Tag::Class);
    }
    
}
