@extends('blog.layout.main')

@section('seo-title')
<title>List Articles</title>
@endsection

@section('custom-css')
<style>
    /*    body {
           background-color: gray;
        }*/

    li.nav-item > a:focus, li.nav-item > a:hover {
        color: #ba3030 !important;
    }

    #mainNav .navbar-nav > li.nav-item > a {
        color: black;
    }

    #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
        color: #ba3030 !important;
    }

    #mainNav .navbar-brand {
        color: black;
    }
</style>
@endsection


@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('https://cdn.pixabay.com/photo/2018/08/24/23/33/panorama-3629120_960_720.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <!--          <div class="site-heading">
                            <h1>All articles</h1>
                            <span class="subheading">Sekiro. The deep forest</span>
                          </div>-->
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<!--<div class="container mt-5">-->
<div class="row justify-content-center mt-5">
    <!--<div class="col-md-8">-->
    <!--<div class="card">-->
    <!--<div class="card-header">{{ __('Login') }}</div>-->

    <div class="col-12">
        <h1>{{ __('Login') }}</h1>
    </div>


    <div class="col-12 mt-4">
        <!--<div class="card-body">-->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!--Redesigned Email-->
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>{{ __('E-Mail Address') }}</label>
                    <input id="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="help-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <!--Redesigned Password-->
            <div class="control-group mb-4">
                <div class="form-group floating-label-form-group controls">
                    <label>{{ __('Password') }}</label>
                    <input id="password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                    @error('password')
                    <span class="help-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="control-group  row mb-5">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>

        </form>

    </div>
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
</div>
<!--</div>-->
@endsection
