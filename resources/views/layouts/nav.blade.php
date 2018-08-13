<header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <a href="/"><img style="max-height:50px; max-width:200px;" src="/media/img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Learn More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/performance">Energy Performance</a>
                <a class="dropdown-item" href="/builders">Builders</a>
                <a class="dropdown-item" href="/specs">Specifications</a>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/survey">10 Second Survey</a>
            </li>

            @if (Auth::guest())
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
              </li>

            @else

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                  <a class="dropdown-item" href="{{ route('user.home') }}">Dashboard</a>
                  <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                  </div>
              </li>

           @endif
          </ul>
        </div>
      </nav>
    </header>
