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
<div class="col-lg-12 col-md-12 mx-auto">
    
    <h1>All Articles</h1>

   <table class="table table-striped table-dark">
       <thead class="thead-dark">
           <tr>
               <th scope="col">Author</th>
               <th scope="col">Title</th>
               <th scope="col">Image</th>
               <th scope="col">Content</th>
               <th scope="col">Options</th>
           </tr>
       </thead>

     @if( count($rows) > 0 ) 
      @foreach($rows as $row)
         <tbody>
             <tr>
                 <td>{{ $row->user->name }}</td>
                 <td>{{ $row->title}}</td>
                 <td>
                     <a href="{{ getImage($row, 'l') }}" target="_blank">
                         <img class="banner" src="{{ getImage($row, 's') }}" alt="{{ $row->title}}">
                     </a>
                 </td>
                 <td>{{ mb_substr($row->content, 0,  200 ) . '...'}}</td>
                 <td>@mdo</td>
             </tr>
         </tbody>
        @endforeach
       @endif

   </table>
    
</div>
@endsection



@section('custom-js')

@endsection