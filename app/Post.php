<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title','description'];
    
    public function images(){
	return $this->belongsToMany('App\Image','image_maps');
    }

    public function user(){
	return $this->belongsTo('App\User');
    }

    public function tags(){
	return $this->belongsToMany('App\Tag','tag_maps');
    }
}
