<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="row w-100">
    <div class="col-md-3">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="col-md-6">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    </div>
    <div class="col-md-3">
      <div class="my-link px-3">
        @if (!session('user'))
          <span><a class="text-dark small text-uppercase no-underline" href="login">Login</a></span>
        @else
          <span>Hello, {{session('user.name')}} |</span>
          <span><a class = "small" href="logout">Logout</a></span>
        @endif
        <button type="button" class="btn px-3 py-2 btn-primary mx-3 small text-capitalize">CHECK OUR PRICES</button>
      </div>
    </div>
  </div>


</nav>

<nav id="secondary-menu" class="navbar navbar-expand-lg navbar-light bg-light d-none">
  <div class="row w-100">
    <div class="col-md-3">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="col-md-6">

    </div>
    <div class="col-md-3">
      <div class="my-link px-5">
        <button type="button" class="btn btn-danger small px-4 py-3 mx-3">CHECK OUR PRICES</button>
      </div>
    </div>

  </div>

</nav>
