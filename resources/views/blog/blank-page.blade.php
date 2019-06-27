@extends('blog.layout.main')

@section('seo-title')
<title>List Articles</title>
@endsection

@section('custom-css')
<link href="/css/custom.css" rel="stylesheet" type="text/css"/>
@endsection


@section('header')
 <!-- Page Header -->
  <header class="masthead" style="background-image: url('/site-images/api-list-articles.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1></h1>
            <span class="subheading"></span>
            <a class="btn btn-primary mr-5" href="{{ route('home') }}">PHP</a>
            <a class="btn btn-danger" id="ajax_header" href="">Ajax</a>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection


@section('content')
<div class="col-lg-8 col-md-10 mx-auto" id="ajax_div">
    <!--Ovde puni ajax-->
</div>


<div class="col-lg-4 col-md-2 d-none"  id="my_sidebar">
    @include('blog.layout.partials.sidebar')
</div>

<form class="d-none">
    @csrf
</form>

@endsection

@section('custom-js')
<script>
   
   /// Api All Articles:
   $(document).ready(function() {
      
      $('#ajax_header').on('click', function(e) {
         e.preventDefault();
         
      }); // #api_all_articles on click end
      
      (function(){
      $.ajax({
                  url: "/api/list-articles",
                  type: "GET",
                  data: {
                     '_token': $('form [name=_token]').val()
                  },
                  'dataType': "json"
               }).done(function(response){
                   $.each(response.data, function(index, element) {
                       
                     //console.log(element.created_at);
                     
                     var htmlString = 
                    "<div class=\"post-preview\">" +
                        " <a href=\"/articles/" + element.id + "/" + element.title + "\" class=\"align-bottom\">" +
                            "<div class=\"clip-container\" style=\"background: url(' "+element.image+" ')\">" +
                                "<div class=\"text-white heading-text\">" +
                                    element.title +
                                "</div>" +
                            "</div>" +
                        "</a>" +
                        
                        "<div>" +
                            element.summary +
                        "</div>" +
                        
                        "<p class=\"post-meta-\">Posted by: " +
                            "<a href=\"/articles-by/"+element.author_id+"/"+element.author+"\">" +
                                 element.author +
                            "</a>" +
                            "on: " + element.created_at  +
                        "</p>" +
                        
                    "</div>";

                     $("#ajax_div").append(htmlString);

                 });


               }).fail(function(jqXHR, error, message){
                 console.log('Ne radi ajax!');
               });  // ajax end
               
               $("#my_sidebar").removeClass('d-none');
               
      })();
   }); // document ready end
   


</script>
@endsection