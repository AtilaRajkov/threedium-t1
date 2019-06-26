<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Article extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'title' => $this->title,
            'image' => $this->image,
            'content' => $this->content,
            'deleted' => $this->deleted,
            'size' => 'm'
        ];
    }
}
