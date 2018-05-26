<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
		'title' => $this->title,
		'description' => $this->description,
		'images' => ImageResource::collection($this->images),
		'created_at' => (string)$this->created_at,
		'update_at' => (string)$this->updated_at,
	];
	
    }
}
