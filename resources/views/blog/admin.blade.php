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
    <div class="alert alert-success" role="alert" id="success_message_div"></div>
    
    <h1>My Admin Panel</h1>
    

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
             <tr class="table_row" id="{{ $row->id }}">
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

                     <a data-href="{{ route('delete', ['article' => $row->id]) }}" 
                        class="btn btn-danger btn-sm"
                        data-toggle="modal" 
                        data-target="#deleteModal"
                        data-title='{{ $row->title }}'
                        data-type="regular"
                        >
                         Delete
                     </a>
                     
                     <!--Ajax Delete-->
                     <a href="#" 
                        data-id="{{ $row->id }}"
                        class="btn btn-warning btn-sm ajax-delete-button"
                        data-toggle="modal" 
                        data-target="#deleteModalAjax"
                        data-title='{{ $row->title }}'
                        data-type="ajax"
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


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure that you want to delete <span id='title-on-modal'></span>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-danger text-white" id="delete-button-on-modal">Yes, Delete</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteModalAjax" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure that you want to delete <span id='title-on-modal-ajax'></span>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-warning" id="delete-button-on-modal-ajax">Yes, Delete</a>
      </div>
    </div>
  </div>
</div>

@endsection


@section('custom-js')
<script>

$(document).ready(function(){
    
    /// MODAL ///
    $('#deleteModal').unbind().bind('shown.bs.modal', function (e) {
      //$('#myInput').trigger('focus');
      var button = $(e.relatedTarget);
      var title = button.data('title');
      var deleteUrl = button.data('href');
      var id = button.data('id');
      
    $("#title-on-modal").html("<b>\""+title+"\"</b>");
    $("#delete-button-on-modal").attr('href', deleteUrl);
    
    });/// deleteModal end
    
    
    $('#deleteModalAjax').unbind().bind('shown.bs.modal', function (e) {
      //$('#myInput').trigger('focus');
      var button = $(e.relatedTarget);
      var title = button.data('title');
      var deleteUrl = button.data('href');
      var id = button.data('id');
      
    $("#title-on-modal-ajax").html("<b>\""+title+"\"</b>");
    
    $("#delete-button-on-modal-ajax").unbind().bind("click", function(e){
            //var id = $(this).attr("data-id");
                
        $("#remove_indicator").val("0");
        e.preventDefault();
        $("#flash_message").remove();

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

            $('#deleteModalAjax').modal('hide');

            if (data.status) {
                $("#remove_indicator").val("1");
                $("#success_message_div").html("<p style='margin:0;'>"+data.message+"</p>");
                //$("#success_message_div").removeClass("d-none");
                $("#success_message_div").fadeIn(300);
            }



        }).fail(function(jqXHR, error, message){
            console.log("Ne Radi");
        }); /// $.ajax END

        if ( $("#remove_indicator").val() === "1") {
            $('tr#' + id).remove();
            setTimeout(function() { 
            $("#success_message_div").fadeOut( 500, function() {

            });
            }, 2000);
        }
                
        }); /// $(".ajax-delete-button") END
        
    });/// deleteModalAjax end
    
    
    
        
         
        

    
}); /// $(document).ready END



</script>
@endsection

