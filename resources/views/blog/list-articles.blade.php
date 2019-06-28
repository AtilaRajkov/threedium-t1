@extends('blog.layout.main')

@section('seo-title')
<title>List Articles</title>
@endsection

@section('custom-css')
<link href="/css/custom.css" rel="stylesheet" type="text/css"/>
@endsection


@section('header')
 <!-- Page Header -->
  <header class="masthead" style="background-image: url('/site-images/all-articles.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>All articles</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection


@section('content')
<div class="col-lg-8 col-md-10 mx-auto">

    @if( count($rows) >0 )
      @foreach( $rows as $row )
      <div class="post-preview">
         <a href="{{ route('show', ['article' => $row->id, 'slug' => Str::slug($row->title, '-') ]) }}" class="align-bottom">
             <div class="clip-container" style="background: url('{{ getImage($row, $size) }}')">
                 <div class="text-white heading-text">
                     {{ $row->title }}
                 </div>
             </div>
         </a>
         <div>
             {{ $row->summary }}
         </div>
         <p class="post-meta">Posted by 
             <a href="{{ route('articles_by_author', ['user' => $row->user->id, 'author' => Str::slug($row->user->name, '-')  ]) }}">
                 {{ $row->user->name }}
             </a>
             on: {{ date('M d, Y', strtotime($row->created_at)) }}
         </p>
      </div>
      @endforeach
      
      <!--Pagination-->
      @include('blog.layout.partials.pagination')
      
    @endif

</div>

<div class="col-lg-4 col-md-2"  id="my_sidebar">
@include('blog.layout.partials.sidebar')
</div>

@endsection



@section('custom-js')

@endsection