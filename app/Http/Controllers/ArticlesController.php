<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
   
//   public function __construct() {
//        $this->middleware('auth')->except('login');
//        $this->middleware('isadmin')->only(['index', 'create', 'store', 'changestatus', 'delete']);
//        $this->middleware('guest')->only('login');
//    }
    
    public function __construct()
    {
       $this->middleware('auth')->only(['index', 'create']);
    }
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.list-articles');
    }

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
        $data = request()->validate([
            'title' => 'required|string|min:3|max:191',
            'image' => 'required|image|mimes:jpeg,bmp,png,jpg',
            'image' => 'nullable|image|mimes:jpeg,bmp,png,jpg',
            'content' => 'required|string|min:3|max:65000',
        ]);
        
        
        
    } /// end of store()

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
