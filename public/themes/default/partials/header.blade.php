  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-secondary static-top">
  <div class="container">
    <a class="navbar-brand" href="/">
          <img src="@asset('img/blog1.png')" alt="blog">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="navbar-brand" href="/">Home                
              </a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#">Contact</a>
        </li>
          <li class="nav-item">
          <!--we create login and logout using auth template-->
            @if (Auth::guest())
              <a class="navbar-brand" href="{{route('login')}}">Login</a>
            @else
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
              </form>
            @endif 
            <!--end login and logout-->
          </li>
      </ul>
    </div>
  </div>
</nav>



  <!-- Page Header -->
  <header class="masthead" style="background-image: url(@asset('img/bg-about.jpg'))">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>digitalCRM</h1>
            <span class="subheading">THis is Default THeme For unser Home section only</span>
          </div>
        </div>
      </div>
    </div>
  </header>