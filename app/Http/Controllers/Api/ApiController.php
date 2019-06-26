<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\Json;
use App\Http\Resources\Article;

use Illuminate\Support\Facades\Validator;

use App\Model\Article as Entity;


class ApiController extends Controller
{
    
    use \App\Traits\saveAndResizeImage;  
    
    public function index() 
   {
      return Article::collection(
              Entity::where('deleted', 0)->get()
              );   
   }
   
   public function create()
    {
        return view('blog.api.api-create');
    }
   
    public function store()
    {
        
        $validator = Validator::make(request()->all(), [
             'title' => 'required|string|min:3|max:191|unique:articles',
             'image' => 'required|image|mimes:jpeg,bmp,png,jpg',
             'content' => 'required|string|min:3|max:65000',
        ]);

         if ($validator->fails()) {
            return [
                    'status' => false,
                    'errors' => $validator->errors()
                    ];
        }

        $row = new App\Model\Article();
        $row->deleted = 0;
        $row->user_id = auth()->user()->id;
        $row->title = request('title');
        $row->content = request('content');

        if (request()->has('image')) {
            $row->image = $this->saveAndResizeImage($this->folderName);
         }
         
         $row->save();
         
         return [
                    'status' => true,
                    'message' => "Successfuly saved."
                    ];

    } /// store() end
   
    
}
