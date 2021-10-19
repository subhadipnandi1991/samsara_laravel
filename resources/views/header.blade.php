<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse w-50" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Solutions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Customers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Resources</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Company</a>
      </li>
    </ul>
  </div>

  <div class="px-5">
    @if (!session('user'))
      <span><a href="login">Login</a></span>
    @else
      <span>Hello, {{session('user.name')}} |</span>
      <span><a href="logout">Logout</a></span>
    @endif
  </div>
</nav>
