  <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
          @if (Auth::check())
              @if(Auth::user()->hasRole('manager'))
                 <li class="nav-item">
                    <a class="nav-link"  href="/admin">Admin</a>
                 </li>
              @endif
                  <li class="nav-item">
                      <a class="nav-link"  href="users/logout">Logout</a>
                  </li>
          @else
                  <li class="nav-item">
                      <a class="nav-link"  href="/register">Register</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link"  href="/login">Login</a>
                  </li>
          @endif
      </ul>

    </div>
  </nav>
</header>
