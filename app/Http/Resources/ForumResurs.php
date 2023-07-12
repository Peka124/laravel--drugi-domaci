<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ForumResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->resource->id,
            'url' =>$this->resource->url,
            'email' =>$this->resource->email,
            'instagram' =>$this->resource->instagram,
            'osnivac' =>$this->resource->osnivac
        ];
        
    }
}
