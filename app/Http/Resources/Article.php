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
            'summary' => $this->summary,
            'image' => \getImage($this, 'm'),
            'content' => $this->content,
            'deleted' => $this->deleted,
            'author' => $this->user->name,
            'author_id' => $this->user->id,
            'created_at' => date('M d, Y', strtotime($this->created_at)),
        ];
    }
}
