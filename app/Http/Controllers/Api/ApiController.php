<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\Json;
use App\Http\Resources\Article;

use App\Model\Article as Entity;


class ApiController extends Controller
{
    public function index() 
   {
      
      return Article::collection(
              Entity::where('deleted', 0)->get()
              );
              
   }
   
}
