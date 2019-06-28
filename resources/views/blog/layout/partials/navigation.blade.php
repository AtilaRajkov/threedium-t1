<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" a
              ria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            
           <!--Api link-->
          <li class="nav-item">
              <a class="nav-link" href="{{ route('blank_page') }}" id="api_all_articles">Ajax:all-articles</a>
          </li>
          @if (Auth::check()) 
            <li class="nav-item">
              <a class="nav-link" href="{{route('api_create')}}">Ajax:Create</a>
            </li>
          @endif
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">All articles</a>
          </li>
          
          @if (Auth::check()) 
            <li class="nav-item">
              <a class="nav-link" href="{{route('create')}}">Create</a>
            </li>
          @endif
          
          
          @guest
            @if ( url()->current() !== url('/login') ) 
               <li class="nav-item">
                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
               </li>
            @endif
          @else
          
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link " href="{{ route('admin') }}" >
                  Admin Panel <span class="caret"></span>
              </a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
          
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link " href="{{ route('admin') }}" >
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
          </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>

 