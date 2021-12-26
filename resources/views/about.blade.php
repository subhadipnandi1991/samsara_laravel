  @extends('master')

@section('content')
<div class="lg-container home-content">
  <div class="pt-4 pb-4">
    <h5 class="text-uppercase text-white fw-bold">About Us</h5>
    <h1 class="text-white fw-bold col-8">Driving transformation through smarter operations</h1>
  </div>
</div>

<div class="hero--video">
  <div class="video">
    <video playsinline="" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{ asset('assets/img/Banner_vB_10_18.mp4') }}">
      <track kind="captions">
    </video>
  </div>
</div>

<div id="about-menu" class="pt-0 pb-0 position-relative" style="margin-top: -45px;">
  <div class="container bg-blue-dark">
    <div class="d-flex justify-center">
      <ul class="text-white no-bullet-list text-xl p-0 m-0">
        <li class="d-inline-block py-4" style="width:150px; cursor:pointer;">What We Do</li>
        <li class="d-inline-block py-4" style="width:150px; cursor:pointer;">Quick Facts</li>
        <li class="d-inline-block py-4" style="width:150px; cursor:pointer;">Our History</li>
        <li class="d-inline-block py-4" style="width:150px; cursor:pointer;">Awards & News</li>
        <li class="d-inline-block py-4" style="width:150px; cursor:pointer;">Our People</li>
        <li class="d-inline-block py-4" style="width:150px; cursor:pointer;">Careers</li>
      </ul>
    </div>
  </div>
</div>

<div class="lg-container my-5">
  <div class="row py-5">
    <div class="col-md-6">
      <img src="{{ asset('assets/img/What-We-Do-Image.jpg') }}" alt="what we do" class="w-100">
      </video>
    </div>
    <div class="col-md-4" style="margin-left: 100px;">
      <h5 class="text-uppercase text-primary">What we do</h5>
      <h3 class="mb-4">Make business decisions with real-time insights</h3>
      <p class="mb-4">Samsara’s mission is to increase the safety, efficiency, and sustainability of the operations that power the global economy. We are the pioneer of the Connected Operations Cloud, which allows businesses that depend on physical operations to harness IoT data to develop actionable business insights and improve their operations.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3">Platform Overview</a>
    </div>
  </div>
  <div class="row py-5">
    <div class="col-md-4">
      <h5 class="text-uppercase text-primary">Quick Facts</h5>
      <h1 class="mb-4 fw-bold">Samsara at a glance</h1>
    </div>
    <div class="col-md-3" style="margin-left: 80px;">
      <hr class="hr border-b-1 border-blue-dark ml-0 mr-auto">
      <h1 class="mb-4 fw-bold">Thousands</h1>
      <p class="text-xl">of customers rely on Samsara</p>
    </div>
    <div class="col-md-3" style="margin-left: 80px;">
      <hr class="hr border-b-1 border-blue-dark ml-0 mr-auto">
      <h1 class="mb-4 fw-bold">2+ trillion</h1>
      <p class="text-xl">data points collected annually</p>
    </div>
  </div>
  <div class="row py-5">
    <div class="col-md-4"></div>
    <div class="col-md-3" style="margin-left: 80px;">
      <hr class="hr border-b-1 border-blue-dark ml-0 mr-auto">
      <h1 class="mb-4 fw-bold">1 million +</h3>
      <p class="text-xl">total IoT devices deployed globally</p>
    </div>
    <div class="col-md-3" style="margin-left: 80px;">
      <hr class="hr border-b-1 border-blue-dark ml-0 mr-auto">
      <h1 class="mb-4 fw-bold">250+ new</h3>
      <p class="text-xl">total IoT devices deployed globally</p>
    </div>
  </div>
  <div class="row py-5">
    <div class="col-md-4 col-sm-12">
      <h1>Some of our customers</h1>
      <p>Samsara serves more than 20,000 customers across a wide range of industries including transportation and logistics, construction, field services, utilities and energy, government, healthcare and education, manufacturing, and food and beverage.</p>
      <a href="#" class="text-xl fw-bold">View customer stories</a>
    </div>
    <div class="col-md-7 col-sm-12" style="">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-logo">
            <a href="#">
              <img src="{{ asset('assets/img/ABF-LOGO-FC.svg') }}" alt="abc">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-logo">
            <img src="{{ asset('assets/img/City-of-Boston-Logo-FC.svg') }}" alt="abc">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-logo">
            <img src="{{ asset('assets/img/Clean-Harbor-Logo-FC.svg') }}" alt="abc">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-logo">
            <img src="{{ asset('assets/img/Liberty-Oil-Logo-FC.svg') }}" alt="abc">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-logo">
            <img src="{{ asset('assets/img/SJW-Logo-Navy.svg') }}" alt="abc">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-logo">
            <img src="{{ asset('assets/img/Uniserve-logo-FC.svg') }}" alt="abc">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
  <div class="m-4 justify-center d-flex">
    <h5 class="text-uppercase text-primary mb-4">Awards & News</h5>
    <h3 class="mb-4">Setting a new standard for IoT</h3>

  </div>





@endsection
