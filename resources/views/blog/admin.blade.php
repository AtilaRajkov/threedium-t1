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
    #success_message_div {
        display: none;
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
    
    <div class="alert alert-success" role="alert" id="success_message_div"></div>

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
             <tr class="table_row">
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
                     
                     <!--Ajax Delete-->
                     <a href="#" 
                        data-id="{{ $row->id }}"
                        class="btn btn-warning btn-sm ajax-delete-button"
                        
                        >
                         Ajax:Delete
                     </a>
                     
                     
                     

                 </td>
             </tr>
         </tbody>
         <input type="text" hidden value="0" id="remove_indicator">
        @endforeach
       @endif

   </table>
    
</div>
<form id="admin_form">
    @csrf
</form>


@endsection


@section('custom-js')
<script>

$(document).ready(function(){
    
        $(".ajax-delete-button").on("click", function(e){
            var id = $(this).attr("data-id");
                
                $("#remove_indicator").val("0");
                e.preventDefault();
                
//                $(this).closest('.table_row').remove();
                $.ajax({
                    url: "/api/delete",
                    type: "GET",
                    async: false,
                    data: {
                        'id': id,
                        '_token': $('#admin_form [name=_token]').val()
                    },
                    'dataType': "json"
                }).done(function(data){
                    
                    if (data.status) {
                        $("#remove_indicator").val("1");
                        $("#success_message_div").html("<p>"+data.message+"</p>");
                        //$("#success_message_div").removeClass("d-none");
                        $("#success_message_div").fadeIn(300);
                    }

                }).fail(function(jqXHR, error, message){
                    console.log("Ne Radi");
                }); /// $.ajax END
                
                if ( $("#remove_indicator").val() === "1") {
                    $(this).closest('tr').remove();
                    setTimeout(function() { 
                    $("#success_message_div").fadeOut( 500, function() {

                    });
                    }, 2000);
                }
                


        }); /// $(".ajax-delete-button") END
        

    
}); /// $(document).ready END



</script>
@endsection

