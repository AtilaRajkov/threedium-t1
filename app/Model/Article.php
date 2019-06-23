<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';    
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    
    // Relacija ka User modelu:
    public function user()
    {
       return $this->belongsTo('App\User');
    }
    
} // Article model end
