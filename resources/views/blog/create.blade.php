@extends('blog.layout.main')

@section('seo-title')
<title>Create Article</title>
@endsection

@section('custom-css')

@endsection


@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('https://cdna.artstation.com/p/assets/images/images/017/052/808/large/anato-finnstark-the-king-s-journey-a-darker-path-by-anatofinnstark-dd3u83b-fullview.jpg?1554446732')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <!--<div class="site-heading">-->
                <h1>Create an Article</h1>
                <span class="subheading">Sekiro. The deep forest</span>
                <!--</div>-->
            </div>
        </div>
    </div>
</header>
@endsection


@section('content')
<h1 class="mb-4">Create an Article</h1>

@include('blog.layout.partials.messages')

<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
    
    <!-- TITLE -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="">
        @if($errors->has('title'))
            <div class='text text-danger'>
                {{ $errors->first('title') }}
            </div>   
        @endif
    </div>

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
        <textarea name="content" class="form-control" id="content" rows="5">{{ old('content') }}</textarea>
        @if($errors->has('title'))
            <div class='text text-danger'>
                {{ $errors->first('content') }}
            </div>
        @endif
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-dark">Create</button>
    </div>
</form>


@endsection



@section('custom-js')

@endsection