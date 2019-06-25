<?php

namespace App\Http\Resources;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Conference extends Json
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'company_id' => $this->company_id,
            'title' => $this->title,
            'max_guests' => $this->max_guests,
//            'registered_guests' => $this->registered_guests,
            'registered_guests' => \CountConferenceRegisteredPeople($this),
            
            'checked_in_guests' => \CountConferenceCheckedPeople($this),
//            'registered_guests' => count($this->guests),
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
