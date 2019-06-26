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
<div class="col-lg-12 col-md-10 mx-auto" id="ajax_div">
    <!--Ovde puni ajax-->
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
         
          // ajax end
         
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
                     var htmlString = "<h1>" + element.title + "</h1>";
                     htmlString += "<img src='" + element.image  +"'>";

                     $("#ajax_div").append(htmlString);

                 });


               }).fail(function(jqXHR, error, message){
                  alert('YOU STUPID');
               });
      })();
   }); // document ready end
   


</script>
@endsection