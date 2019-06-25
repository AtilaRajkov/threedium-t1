<?php

namespace App\Http\Resources;

//use Illuminate\Http\Resources\Json\ResourceCollection;

class Guest extends Json
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if ($this->qr_promo !== null) {
            $voucher =  $this->qr_promo->registration_code_promo;
        } else {
            $voucher = null;
        }
        
        return [
            'id' => $this->id,
            'first_name' => $this->user->first_name,
            'last_name' => $this->user->last_name,
            'email' => $this->user->email,
            'checked_in' => $this->checked_in,
            'checked_in_at' => $this->checked_in_at,
            'registration_code' => $this->registration_code,
            'voucher' => $voucher
        ];
    }
}
