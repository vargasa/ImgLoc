<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Post;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
	    'id' => $this->id,
		'name' => $this->name,
		'email' => $this->email,
		'posts' => $this->posts->pluck('id')->toArray(),
		'images' => $this->images->pluck('id')->toArray(),
		'remember_token' => $this->remember_token,
	];
    }
}
