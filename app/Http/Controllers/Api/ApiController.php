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
    private $folderName = 'images';
    
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
            'summary' => 'required|string|min:3|max:191',
             'content' => 'required|string|min:3|max:65000',
//             'content' => 'nullable|string|min:3|max:65000',
        ]);

//        dd(request()->all());
//        dd(request('content'));
        
         if ($validator->fails()) {
            return [
                    'status' => false,
                    'errors' => $validator->errors()
                    ];
        }

        $row = new \App\Model\Article();
        $row->deleted = 0;
        $row->user_id = auth()->user()->id;
        $row->title = request('title');
        $row->summary = request('summary');
        $row->content = request('content');

        if (request()->has('image')) {
            $row->image = $this->saveAndResizeImage($this->folderName);
         }
         
         if ($row->save()) {

            //return redirect('/api/success')->with('status', 'You successfuly creted an article.');
//             return redirect()->back()->with("status", true);

            return [
                'status' => true,
                'message' => "You successfuly created an article."
            ];
        }
    } /// store() end
   
     public function delete() {

        $id = request('id');
        $article = \App\Model\Article::where('id', $id)->first();

        /// Soft delete:
        $article->deleted = 1;
        $article->deleted_at = now();
        $article->save();

        if ($article->save()) {

            return [
                'status' => true,
                'message' => "Article \"" . $article->title . "\" successfuly deleted."
            ];
        }
    }

}
