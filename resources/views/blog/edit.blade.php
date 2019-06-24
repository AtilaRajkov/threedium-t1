@extends('blog.layout.main')

@section('seo-title')
<title>Create Article</title>
@endsection

@section('custom-css')

@endsection


@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('https://cdna.artstation.com/p/assets/images/images/017/529/392/large/anato-finnstark-the-son-of-nothingness-by-anatofinnstark-dd5kk8t-fullview.jpg?1556352474')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <!--<div class="site-heading">-->
                <h1>Edit</h1>
                <span class="subheading">Update this article</span>
                <!--</div>-->
            </div>
        </div>
    </div>
</header>
@endsection


@section('content')
<div class="col-lg-8 col-md-10 mx-auto">

<h1 class="mb-4">Edit th Article</h1>

@include('blog.layout.partials.messages')


<form method="POST" action="{{ route('update', ['article' => $article->id]) }}" enctype="multipart/form-data">
    @csrf
    
    <!-- TITLE -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title', $article->title) }}" class="form-control" id="title" placeholder="">
        @if($errors->has('title'))
            <div class='text text-danger'>
                {{ $errors->first('title') }}
            </div>   
        @endif
    </div>
    
    @if(isset($article->image) && !empty($article->image))
      <div>
          <label>Current image</label>
          <img class="w-100 mb-3" src="{{ getImage($article, 'm') }}">
      </div>
      <br>
    @endif

    <!-- IMAGE -->
    <div class="form-group">
        <label for="image">Select the Banner</label>
        <input type="file" name="image" class="form-control-file" id="image">
        @if($errors->has('image'))
            <div class='text text-danger'>
                {{ $errors->first('image') }}
            </div>
         @endif
    </div>

    <!-- CONTENT -->
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" id="content" rows="5">{{ old('content', $article->content) }}</textarea>
        @if($errors->has('title'))
            <div class='text text-danger'>
                {{ $errors->first('content') }}
            </div>
        @endif
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-dark">Edit</button>
    </div>
</form>

</div>
@endsection



@section('custom-js')

@endsection