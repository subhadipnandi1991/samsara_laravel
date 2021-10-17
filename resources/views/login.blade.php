@extends('accessPage')

@section('content')
<div class="row">
  <div class="col-4 p-5" id="MyLoginContainer">
    <form>
      <h2 class="m-3 text-center">Sign In</h2>
      <div class="form-group">
        <input type="email" class="form-control m-3" id="email" aria-describedby="emailHelp" placeholder="name@work-email.com">
      </div>
      <div class="form-group">
        <input type="password" class="form-control m-3" id="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary mx-3 w-100">Sign In</button>
      <div class="text-center row m-3 px-5">
        <a href="#" class="navbar-link col-6 text-black">Sign up</a>
        <a href="#" class="navbar-link col-6 text-black">Reset Password</a>
      </div>

    </form>
  </div>
  <div class="col-8" id="MyLoginBackground">

  </div>
</div>
@endsection
