<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClanResurs extends JsonResource
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
            'imePrezime' =>$this->resource->imePrezime,
            'username' =>$this->resource->username,
            'email' =>$this->resource->email,
            'forum' =>new ForumResurs($this->resource->forum),
        ];
        
    }
}
