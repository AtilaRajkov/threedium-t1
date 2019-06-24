@extends('blog.layout.main')

@section('seo-title')
<title>Show Article</title>
@endsection

@section('custom-css')
<style>
    .masthead {
        
    }
</style>
@endsection


@section('header')
<header class="masthead" style="background-image: url('{{ $image }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $article->title }}</h1>
            <span class="meta">Posted by
              <a href="#">{{ $article->user->name }}</a>
              on: {{ date('M d, Y', strtotime($article->created_at)) }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection


@section('content')
<div class="col-lg-8 col-md-10 mx-auto">

    {{ $article->content }}

@endsection



@section('custom-js')

@endsection