<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['description'];
    
    public function posts() {
	return $this->belongsToMany('App\Post','image_maps');
    }

    public function users() {
	return $this->belongsTo('App\User');
    }

    
   
}
