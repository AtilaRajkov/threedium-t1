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
            <h1>Api: All articles</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection


@section('content')
<div class="col-lg-8 col-md-10 mx-auto">

    
   

</div>

@include('blog.layout.partials.sidebar')

@endsection



@section('custom-js')
<script>
   
   /// Api All Articles:
   $(document).ready(function() {
      
      $('#api_all_articles').on('click', function(e) {
         e.preventDefault();
         
         $.ajax({
            url: "/api/list-articles",
            type: "GET",
            data: {
               '_token': $('form [name=_token]').val()
            },
            'dataType': "html"
         }).done(function(data){
//            console.log(data);
//            alert(data);
//               var obj = jQuery.parseJSON(data);
//               $.each(obj, function(key, value) {
////                 alert(value);
//                 console.log(key);
//               }); 


            var newObject = {
   "data":[
      {
         "id":2,
         "user_id":2,
         "title":"My Berserk Title One",
         "image":"\/upload\/images\/Article-tilte-2-2019-06-23-135548.jpg",
         "content":"asd asdf sdfasd f asdf asd",
         "deleted":0,
         "size":"m"
      },
      {
         "id":3,
         "user_id":1,
         "title":"Third test titlev2",
         "image":"\/upload\/images\/Article-third-test-titlev2-2019-06-25-102225.jpg",
         "content":"sadf dfagda gfs fdasg dasfg sdfg sdfg sdf g",
         "deleted":0,
         "size":"m"
      },
      {
         "id":4,
         "user_id":1,
         "title":"sdfsdffds",
         "image":"\/upload\/images\/Article-sdfsdffds-2019-06-23-135940.jpg",
         "content":"sdfsdfsdfsd",
         "deleted":0,
         "size":"m"
      },
      {
         "id":5,
         "user_id":1,
         "title":"zasdzasd",
         "image":"\/upload\/images\/Article-zasdzasd-2019-06-23-140212.jpg",
         "content":"asdasdasd",
         "deleted":0,
         "size":"m"
      },
      {
         "id":6,
         "user_id":1,
         "title":"Aaaaaaaaaaa",
         "image":"\/upload\/images\/Article-aaaaaaaaaaa-2019-06-24-112254.jpg",
         "content":"asdasdasd asd as",
         "deleted":0,
         "size":"m"
      },
      {
         "id":9,
         "user_id":1,
         "title":"Jelenko",
         "image":"\/upload\/images\/Article-jelenko-2019-06-25-093452.jpg",
         "content":"<p>Spicy jalapeno bacon ipsum dolor amet ham hock adipisicing landjaeger pork. Rump bresaola biltong commodo, leberkas irure spare ribs ut. Cupim ex incididunt kielbasa bacon porchetta. Ullamco quis cupidatat, fatback et ham shankle proident voluptate eu non alcatra culpa pork belly.<\/p>\r\n\r\n<p>T-bone aliqua quis cow non ball tip hamburger capicola ut. Sint corned beef lorem in capicola pork loin spare ribs culpa ipsum ut laborum dolor quis. In porchetta pastrami enim pork loin proident tempor t-bone pork leberkas strip steak. Porchetta reprehenderit chuck sirloin, laborum veniam nisi meatball fatback pariatur aliqua shank qui ea. Non dolore chuck ex pork loin tail adipisicing. Landjaeger adipisicing boudin, dolor in eiusmod et kevin consequat sint. Cow deserunt picanha velit ham hock lorem.<\/p>\r\n\r\n<p>Swine lorem incididunt irure ut pork chop frankfurter tongue minim. Eu consequat swine dolore irure ham. Landjaeger culpa boudin, leberkas shankle irure eu in magna pig doner ipsum andouille short ribs. Hamburger ball tip incididunt, chuck sunt est tri-tip shoulder occaecat ham pork porchetta ullamco sausage jerky. Commodo tongue aliquip, occaecat ex jerky ribeye sausage.<\/p>\r\n\r\n<p>Ribeye mollit lorem tongue sunt do, consectetur ullamco officia chuck dolore id pork belly filet mignon. Labore in pancetta, velit pastrami beef t-bone sausage corned beef fatback. Salami ut andouille, nulla incididunt cillum capicola sausage tri-tip ribeye. Jerky venison porchetta frankfurter, ipsum bresaola ham hock. Chuck tail hamburger meatloaf kielbasa pancetta, non in porchetta turducken ut. Quis leberkas flank anim, tail deserunt landjaeger fatback.<\/p>\r\n\r\n<p><img alt=\"\" src=\"https:\/\/cdna.artstation.com\/p\/assets\/images\/images\/017\/149\/484\/large\/anato-finnstark-the-king-s-journey-the-forgotten-by-anatofinnstark-dd46xh6-fullview.jpg?1554827802\" style=\"float:left; height:107px; margin:10px; width:200px\" \/><\/p>\r\n\r\n<p>Dolore jowl porchetta, incididunt in fatback flank consequat bresaola ullamco et. Anim spare ribs in shankle pork belly laborum nulla exercitation drumstick magna eu corned beef ham. Pork chop fugiat fatback, turkey exercitation in quis est. Ut adipisicing in, nisi porchetta flank jerky. Eiusmod tenderloin adipisicing, shankle drumstick commodo kielbasa pig cow. Swine cillum jowl, pariatur venison short ribs eiusmod in excepteur burgdoggen lorem.<\/p>",
         "deleted":0,
         "size":"m"
      }
   ]
};


             $.each(newObject.data, function(index, element) {
               console.log(element.title); 
           });
           
           
           var articleObject = jQuery.parseJSON(data);
             $.each(articleObject.data, function(index, element) {
               var htmlString = "<div class=\"post-preview\"><a href=\"{{ route('show', ['article' => $row->id," +
               " 'slug' => Str::slug($row->title, '-') ]) }}\" class=\"align-bottom\"><div class=\"clip-container\" style=\"background: url('')\"><div class=\"text-white heading-text\">";
               htmlString += elemet.title;
               htmlString += "</div></div></a><div>";
               htmlString += 
               
               
           });
               
               
         }).fail(function(jqXHR, error, message){
            alert('YOU STUPID');
         }); // ajax end
         
      }); // #api_all_articles on click end
      
   }); // document ready end
   

</script>
@endsection