<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait getImage {
    protected function getImage($dimension = NULL){                
        if (request()->has('image')){
            $imagePath = request()->image;
        } elseif (request()->has('banner')) {
            $imagePath = request()->banner;
        }
        
        if(!is_null($dimension)){
            $extension = '.' . pathinfo($imagePath, PATHINFO_EXTENSION);
            $imagePath = str_replace($extension, '-' . $dimension . $extension, $imagePath);
        }

        return $imagePath;
    }
}