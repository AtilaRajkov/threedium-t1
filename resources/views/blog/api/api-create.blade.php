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

<div class="alert alert-success d-none" role="alert" id="success_message_div">
</div>

<form method="POST" enctype="multipart/form-data" id="article-form">
    @csrf
    
    <!-- TITLE -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="">
            <div class='text text-danger title_errors'>
                
            </div>   
    </div>
    
        <!-- SUMMARY -->
    <div class="form-group">
        <label for="title">Summary</label>
        <input type="text" name="summary" value="{{ old('summary') }}" class="form-control" id="summary" placeholder="">
            <div class='text text-danger summary_errors'>
                
            </div>   
    </div>

    
    <!-- IMAGE -->
    <div class="form-group">
        <label for="image">Choose an Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
            <div class='text text-danger image_errors'>
                
            </div>
    </div>

    <textarea name="content" id="textarea_1" hidden></textarea>
    
    <!-- CONTENT -->
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content_ck" class="form-control" id="content" rows="10" >{{ old('content') }}</textarea>
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
CKEDITOR.replace( 'content_ck' );
</script>

<script>
 /// Api Create Article:
$(document).ready(function() {

   $('#ajax_create').on('click', function(e) {
      e.preventDefault();
      
      
        var content = CKEDITOR.instances['content'].getData();
        $("#textarea_1").val(content);
         var form = $('#article-form').get(0);
//         var data = new FormData(form);
//         data.content = content;
//         data._pera= $('#article-form [name=_token]').val();
         
         $.ajax({
             url: "/api/store",
             type: "post",
             async: false,
             data: new FormData(form),
             contentType: false,
             processData:false,
             cache: false
         }).done(function (response) {
             
             /// Ispis gresakaa za "title":
             if (!response.staus && response.errors !== undefined && response.errors.title !== undefined) {
                    $("#success_message_div").addClass("d-none");
                    $(".title_errors").html("<p id='title_errors'>"+response.errors.title[0]+"</p>");
             } else {
                 $("#title_errors").remove();
             }
             /// Ispis gresaka za "image":
             if (!response.staus && response.errors !== undefined && response.errors.image !== undefined) {
                   $("#success_message_div").addClass("d-none");
                    $(".image_errors").html("<p id='image_errors'>"+response.errors.image[0]+"</p>");
             } else {
                 $("#image_errors").remove();
             }
             /// Ispis gresaka za "content":
             if (!response.staus && response.errors !== undefined && response.errors.content !== undefined) {
                   $("#success_message_div").addClass("d-none");
                    $(".content_errors").html("<p id='content_errors'>"+response.errors.content[0]+"</p>");
             } else {
                 $("#content_errors").remove();
             }
             /// Ispis gresaka za "summary":
             if (!response.staus && response.errors !== undefined && response.errors.summary !== undefined) {
                   $("#success_message_div").addClass("d-none");
                    $(".summary_errors").html("<p id='summary_errors'>"+response.errors.summary[0]+"</p>");
             } else {
                 $("#summary_errors").remove();
             }
             
             /// Ispis success message-a
             if ( response.status ) {
                 $("#success_message_div").html("<p id='success_message_p'>"+response.message+"</p>");
//                 $("#success_message_div").removeClass("d-none");
                    CKEDITOR.instances.editeur1.setData("");
             }
             

             
         }).fail(function (jqXHR, error, message) {
             
         });  // ajax end

   }); // #api_all_articles on click end
   
    });
</script>
@endsection