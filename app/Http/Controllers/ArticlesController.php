<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ArticlesController extends Controller
{
   
   use \App\Traits\saveAndResizeImage;  
   
   private $folderName = 'images';
   
//   public function __construct() {
//        $this->middleware('auth')->except('login');
//        $this->middleware('isadmin')->only(['index', 'create', 'store', 'changestatus', 'delete']);
//        $this->middleware('guest')->only('login');
//    }
    
    public function __construct()
    {
       $this->middleware('auth')->only(['create', 'admin']);
    }
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.list-articles');
    }  // index() end
    
    
    public function admin()
    {
       $rows =  Article::where('deleted', 0)
               ->where('user_id', auth()->id())
               ->get();
       
       return(view('blog.all-table', compact('rows')));
       
    } // allTable() end

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request) 
      {
         request()->validate([
             'title' => 'required|string|min:3|max:191',
             'image' => 'required|image|mimes:jpeg,bmp,png,jpg',
             'content' => 'required|string|min:3|max:65000',
         ]);

         /// Get data from the request and save new the new article.
         $row = new Article();
         $row->deleted = 0;
         $row->user_id = auth()->user()->id;
         $row->title = request('title');
         $row->content = request('content');

         if (request()->has('image')) {
            $row->image = $this->saveAndResizeImage($this->folderName);
         }
         
         $row->save();
         
         // set message
//         session()->flash('message', [
//             'type' => 'success',
//            // 'text' => trans('admin/program.program-created', [ "program" => $row->title ] )
//             'text' => 'You succeccfuly created an article.' 
//         ]);
         session()->flash('message-type', 'success');
         session()->flash('message-text', 'Successfully created Article "' . $row->title . '".');
         
         return redirect(route('create'));
         
      }/// end of store()

   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
}
