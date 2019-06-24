@extends('blog.layout.main')

@section('seo-title')
<title>List Articles in Table</title>
@endsection

@section('custom-css')
<style>
    table {
       font-size: 15px;
       font-family: Helvetica;
    }
    .banner {
       width: 200px;
    }
    .remove {
/*        width: 30px;
        height: auto;*/
    }
    .btn {
        font-size: 12px;
        padding: 5px;
    }
</style>
@endsection


@section('header')
 <!-- Page Header -->
<header class="masthead" style="background-image: url('https://cdnb.artstation.com/p/assets/images/images/018/394/879/large/anato-finnstark-vautourrconcour.jpg?1559210038')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <!--<div class="site-heading">-->
                <h1>Articles table</h1>
                <span class="subheading">All the articles listed in a table.</span>
                <!--</div>-->
            </div>
        </div>
    </div>
</header>
@endsection


@section('content')
<div class="col-lg-10 col-md-12 mx-auto">
    
    @include('blog.layout.partials.messages')
    
    <h1>My Admin Panel</h1>

   <!--<table class="table table-bordered  table-hover table-dark">-->
   <table class="table table-striped table-hover table-dark table-sm">
       <thead class="thead-dark">
           <tr>
               <th scope="col" class="pl-3">Author</th>
               <th scope="col">Title</th>
               <th scope="col">Image</th>
               <th scope="col">Options</th>
           </tr>
       </thead>

     @if( count($rows) > 0 ) 
      @foreach($rows as $row)
         <tbody>
             <tr>
                 <td class="align-middle pl-3">{{ $row->user->name }}</td>
                 <td class="align-middle">{{ $row->title}}</td>
                 <td>
                     <a href="{{ getImage($row, 'l') }}" target="_blank">
                         <img class="banner" src="{{ getImage($row, 's') }}" alt="{{ $row->title}}">
                     </a>
                 </td>
                 
                 <td class="align-middle">
                     
                     <a href="{{ route('show', ['article' => $row->id, 'slug' => Str::slug($row->title, '-')  ]) }}" 
                        class="btn btn-success btn-sm">
                         Show
                     </a>
                     
                     <a href="{{ route('edit', ['article' => $row->id]) }}" 
                        class="btn btn-info btn-sm">
                         Edit
                     </a>

                     <a href="{{ route('delete', ['article' => $row->id]) }}" 
                        class="btn btn-danger btn-sm">
                         Delete
                     </a>
                     
                     
                     

                 </td>
             </tr>
         </tbody>
        @endforeach
       @endif

   </table>
    
</div>
@endsection



@section('custom-js')

@endsection