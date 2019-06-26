@extends('blog.layout.main')

@section('seo-title')
<title>Api:Create Article</title>
@endsection

@section('custom-css')
<!--<link href="/ckeditor/contents.css" rel="stylesheet" type="text/css"/>-->
@endsection


@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('https://cdna.artstation.com/p/assets/images/images/017/052/808/large/anato-finnstark-the-king-s-journey-a-darker-path-by-anatofinnstark-dd3u83b-fullview.jpg?1554446732')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <!--<div class="site-heading">-->
                <h1>Api: Create an Article</h1>
                <span class="subheading">Sekiro. The deep forest</span>
                <!--</div>-->
            </div>
        </div>
    </div>
</header>
@endsection


@section('content')
<div class="col-lg-8 col-md-10 mx-auto">

<h1 class="mb-4">Api: Create an Article</h1>

@include('blog.layout.partials.messages')

<form method="POST" enctype="multipart/form-data" id="article-form">
    @csrf
    
    <!-- TITLE -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="">
            <div class='text text-danger title_errors'>
                
            </div>   
    </div>

    <!-- IMAGE -->
    <div class="form-group">
        <label for="image">Choose an Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
            <div class='text text-danger image_errors'>
                
            </div>
    </div>

    <!-- CONTENT -->
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" id="content-create" rows="10" >{{ old('content') }}</textarea>
            <div class='text text-danger content_errors'>
                
            </div>
    </div>

<div class="text-right">
        <button  class="btn btn-dark" id="ajax_create">Create</button>
    </div>
</div>
    
</form>
@endsection



@section('custom-js')
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'content' );
</script>

<script>
 /// Api Create Article:
$(document).ready(function() {

   $('#ajax_create').on('click', function(e) {
      e.preventDefault();
         var form = $('#article-form').get(0);
//         console.log(form);
         $.ajax({
             url: "/api/store",
             type: "post",
             async: false,
             data: new FormData(form),
             contentType: false,
             processData:false,
             cache: false
         }).done(function (response) {
             
             
             if (!response.staus && response.errors.title !== undefined) {
                 if(response.errors.title !== undefined) {
                   console.log(response.errors.title);
                    $(".title_errors").html("<p id='title_errors'>"+response.errors.title[0]+"</p>");
                 }
//                 if(response.errors.image[0]) {
//                   console.log(response.errors.image);
//                    $(".image_errors").html("<p>"+response.errors.image[0]+"</p>");
//                 }
//                 if(response.errors.content[0]) {
//                   console.log(response.errors.content);
//                    $(".content_errors").html("<p>"+response.errors.content[0]+"</p>");
//                 }
             } else {
                 $("#title_errors").remove();
             }
             
            
             
         }).fail(function (jqXHR, error, message) {
             
         });  // ajax end

   }); // #api_all_articles on click end
   
    });
</script>
@endsection