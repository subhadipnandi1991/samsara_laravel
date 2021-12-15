@extends('master')

@section('content')

<div class="" style='background-image: url("//images.ctfassets.net/bx9krvy0u3sx/5J0wKkDBXaL0UH58jdE6W6/e2f4f377e921b52c7d87010064ca0791/SurveyMonkey-img.jpg"); background-repeat: no-repeat; background-size:cover; height:460px;'>
  <div class="gradient-bg" style="height:460px;">
    <div>
      <div class="header-text col-md-6 col-sm-12" style="margin-left: 150px; padding-bottom:80px; padding-top:80px;">
        <h1 class="fs-48 text-white">Streamline your operations</h1>
        <p class="text-white">One platform for fleet management, driver safety, and compliance</p>
        <a href="#" class="btn btn-danger text-uppercase">check our prices</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row my-5">
    <div class="col-md-4">
      <div class="text-center">
        <img src="{{ asset('assets/img/platform_easy-to_use.svg') }}" alt="" style="height:96px; width:96px;">
        <h6 class="text-uppercase my-3">Boost operational efficiency</h6>
        <p>Go beyond GPS tracking and use a single platform for real-time location, compliance and safety.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="{{ asset('assets/img/Safety.svg') }}" alt="" style="height:96px; width:96px;">
        <h6 class="text-uppercase my-3">Enhance the driver experience</h6>
        <p>Protect your drivers with AI dash cams and simplify their key tasks with the easy-to-use Driver App.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="{{ asset('assets/img/Star-Rating.svg') }}" alt="" style="height:96px; width:96px;">
        <h6 class="text-uppercase my-3">Exceed customer expectations</h6>
        <p>Easily share live ETA’s with customers to reduce inquiries, increase satisfaction, and win more business.</p>
      </div>
    </div>
  </div>
</div>
<div class="w-100 container z-10">
  <div class="d-flex pb-5 justify-center">
    <a class="btn btn-primary text-uppercase p-3 small" href="#">Learn More</a>
  </div>
</div>
<div class="container">
  
</div>
<div class="" style="z-index: -1; bottom: 40px; width: 601px; height: 511px; right: -100px;">
  <svg viewBox="0 0 663 553" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="illustrative-copy-26" transform="translate(-44.000000, -2751.000000)" stroke="#2DCCD3" stroke-width="2"><path d="M308,3162.65517 L308,3257 C132.66579,3243.75855 45,3151.06983 45,2978.93103 L45,2753 L308,2753 L308,3016.17241 L191.386792,3016.17241 C191.386792,3100.58663 230.257473,3149.41373 308,3162.65517 Z M637,3162.65517 L637,3257 C461.66579,3243.75855 374,3151.06983 374,2978.93103 L374,2753 L637,2753 L637,3016.17241 L520.386792,3016.17241 C520.386792,3100.58663 559.257473,3149.41373 637,3162.65517 Z" id="-copy-3" transform="translate(341.000000, 3005.000000) scale(1, -1) translate(-341.000000, -3005.000000)" vector-effect="non-scaling-stroke"></path></g></g></svg>
</div>

@endsection
