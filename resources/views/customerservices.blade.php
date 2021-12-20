@extends('master')

@section('content')
<div class="bg-blue-dark">
  <div class="position-absolute w-100" style="z-index: 1;">
    <div class="image__play d-flex justify-center
     cursor-pointer z-10">
      <svg width="133" height="133" viewBox="0 0 133 133" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="66.5" cy="66.5" r="66.5" fill="white" fill-opacity="0.8"></circle>
        <path d="M91 68L52.75 90.5167L52.75 45.4833L91 68Z" fill="#00263E"></path>
      </svg>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5">
      <div style="margin-left:200px; padding: 100px 0;">
        <h1 class="text-white mb-4">Onboarding & Support with Samsara</h2>
        <h4 class="text-white mb-4">As a customer, you'll tap into a wealth of resources and support to help you deliver business value, faster and at scale.</h4>
        <a class="btn btn-primary text-uppercase p-3 small" href="#">Watch video</a>
      </div>
    </div>
    <div class="col-md-7">
      <video autoplay="autoplay" loop="loop" muted="muted" playsinline="" poster="{{ asset('assets/img/customer_experience_loop.mp4') }}" preload="auto" webkit-playsinline="" height="714" style="width:104%">
        <source src="{{ asset('assets/img/customer_experience_loop.mp4') }}">
      </video>
    </div>
  </div>
</div>

@endsection
