@extends('blog.layout.main')

@section('seo-title')
<title>List Articles</title>
@endsection

@section('custom-css')

@endsection


@section('header')
 <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://cdna.artstation.com/p/assets/images/images/017/729/070/large/anato-finnstark-sekiro-the-deep-forest-by-anatofinnstark-dd6adi0-fullview.jpg?1557136943')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>All articles</h1>
            <span class="subheading">Sekiro. The deep forest</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection


@section('content')
<div class="col-lg-8 col-md-10 mx-auto">

<a href="post.html">
    <h2 class="post-title">
        My Dummy content. Man must explore, and this is exploration at its greatest
    </h2>
    <h3 class="post-subtitle">
        Problems look mighty small from 150 kilometers up.
    </h3>
</a>
<p class="post-meta">Posted by
    <a href="#">Atila Rajkov</a>
    on Jun 22, 2019</p>


</div>
@endsection



@section('custom-js')

@endsection