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
      <hr class="hr border-b-1 border-blue-dark ml-0 mr-auto" style="opacity:1;">
      <h1 class="mb-4 fw-bold">Thousands</h1>
      <p class="text-xl">of customers rely on Samsara</p>
    </div>
    <div class="col-md-3" style="margin-left: 80px;">
      <hr class="hr border-b-1 border-blue-dark ml-0 mr-auto" style="opacity:1;">
      <h1 class="mb-4 fw-bold">2+ trillion</h1>
      <p class="text-xl">data points collected annually</p>
    </div>
  </div>
  <div class="row py-5">
    <div class="col-md-4"></div>
    <div class="col-md-3" style="margin-left: 80px;">
      <hr class="hr border-b-1 border-blue-dark ml-0 mr-auto" style="opacity:1;">
      <h1 class="mb-4 fw-bold">1 million +</h3>
      <p class="text-xl">total IoT devices deployed globally</p>
    </div>
    <div class="col-md-3" style="margin-left: 80px;">
      <hr class="hr border-b-1 border-blue-dark ml-0 mr-auto" style="opacity:1;">
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
<div class="m-4 text-center">
  <h5 class="text-uppercase text-primary mb-4">Awards & News</h5>
  <h3 class="mb-4">Setting a new standard for IoT</h3>
  <div class="flex justify-center">
    <img src="{{ asset('assets/img/IncBestLedCompanies_SocialImage3.jpeg') }}" alt="" style="width: 130px; height: auto; margin:20px;">
    <img src="{{ asset('assets/img/8G0VW2Ck_400x400.png') }}" alt="" style="width: 130px; height: auto; margin:20px;">
    <img src="{{ asset('assets/img/TS21-UnitedStates-Year-250px.png') }}" alt="" style="width: 130px; height: auto; margin:20px;">
    <img src="{{ asset('assets/img/AI50_Light-Year-300x240_2.jpg') }}" alt="" style="width: 130px; height: auto; margin:20px;">
    <img src="{{ asset('assets/img/6c8e4d7de5a5a7a16edb57b0e1a3e7d5_1.jpg') }}" alt="" style="width: 130px; height: auto; margin:20px;">
    <img src="{{ asset('assets/img/Botkeeper_The_Americas_Fastest_Growing_Companies_2021_1.jpg') }}" alt="" style="width: 130px; height: auto; margin:20px;">
  </div>
</div>
<div class="lg-container my-5">
  <div class="row mb-5">
    <div class="col-md-5">
      <img src="{{ asset('assets/img/In-the-news-img.jpg') }}" alt="" class="w-100">
    </div>
    <div class="col-md-6" style="padding-left: 100px;">
      <h1 class="mb-4 fw-bold">In the news</h1>
      <h5 class="text-uppercase text-primary mb-4">News Article</h5>
      <p>
        <a href="#" class="text-xl no-underline text-black">
          Samsara app now helps fleet drivers end the day on a productive note
        </a>
      </p>
      <h5 class="text-uppercase text-primary mb-4">Press release</h5>
      <p>
        <a href="#" class="text-xl no-underline text-black">
          Samsara named to Inc.'s Best-Led Companies list
        </a>
      </p>
      <h5 class="text-uppercase text-primary mb-4">News Article</h5>
      <p>
        <a href="#" class="text-xl no-underline text-black">
          New data from Samsara shows how AI and digital tools are helping combat the labor shortage
        </a>
      </p>
      <a href="#" class="btn btn-outline-primary fw-bold small text-uppercase px-4 py-3" style="width: 200px;">More News</a>
      <a href="#" class="btn btn-outline-primary fw-bold small text-uppercase px-4 py-3" style="width: 200px;">Our Blog</a>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-5">
      <h5 class="text-uppercase text-primary mb-4">Our People</h5>
      <h1 class="mb-4 fw-bold">Meet our leadership</h1>
      <p>Samsara prides itself not only on award-winning technology but also on the talent of its people. The company is thriving under the guidance and leadership of some of the brightest minds.</p>
      <a href="#" class="btn btn-outline-primary fw-bold small text-uppercase px-4 py-3" style="width: 200px;">leadership team</a>
    </div>
    <div class="col-md-7">
      <div class="flex justify-center">
        <div id="members-1" class="d-block">
          <div class="row">
            <div class="col-md-4">
              <div class="card pic-card">
                <a href="#">
                  <img src="{{ asset('assets/img/Dominic.jpg') }}" alt="abc" class="w-100">
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/Kiren_Sekar.png') }}" alt="abc" class="w-100">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/melissa_yeh_2.JPG') }}" alt="abc" class="w-100">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/Philip-van-der-Wilt-3.jpg') }}" alt="abc" class="w-100">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/Stephen-Franchetti-cropped.png') }}" alt="abc"  class="w-100">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/robert_stobaugh.jpg') }}" alt="abc"  class="w-100">
              </div>
            </div>
          </div>
        </div>
        <div id="members-2" class="d-none">
          <div class="row">
            <div class="col-md-4">
              <div class="card pic-card">
                <a href="#">
                  <img src="{{ asset('assets/img/Sanjit_Biswas.png') }}" alt="abc" class="w-100">
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/adam_Eltoukhy.jpg') }}" alt="abc" class="w-100">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/Sarah_Patterson.jpg') }}" alt="abc" class="w-100">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/John_Bicket.png') }}" alt="abc" class="w-100">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/Andy_McCall.jpg') }}" alt="abc"  class="w-100">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pic-card">
                <img src="{{ asset('assets/img/Ben_Calderon.png') }}" alt="abc"  class="w-100">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row py-5">
    <div class="col-md-6">
      <img src="{{ asset('assets/img/Diversity-Img.jpg') }}" alt="Diversity" class="w-100">
      </video>
    </div>
    <div class="col-md-4" style="margin-left: 100px;">
      <h1 class="mb-4 fw-bold">Diversity, equity,  and inclusion</h1>
      <p class="mb-4">At Samsara, we depend on the unique approaches of our team members to help us solve complex problems. We are committed to increasing diversity across our team and ensuring that Samsara is a place where people from all backgrounds can make an impact.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase fw-bold px-4 py-3" style="width: 200px;">Learn More</a>
    </div>
  </div>
</div>
<div class="w-100">
  <div id="office-1" class="d-block">
    <img  src="{{ asset('assets/img/original_6.jpg') }}" alt="" class="w-100">
    <a href="#" class="btn btn-primary small text-uppercase fw-bold px-4 py-3 position-relative" style="width: 300px;">Atlanta Office</a>
  </div>
  <div id="office-2" class="d-none">
    <img src="{{ asset('assets/img/UK-img.jpg') }}" alt="" class="w-100">
    <a href="#" class="btn btn-primary small text-uppercase fw-bold px-4 py-3 position-relative" style="width: 300px;">London Office</a>
  </div>
  <div id="office-3" class="d-none">
    <img src="{{ asset('assets/img/Office-Slider-Image-SF8.jpg') }}" alt="" class="w-100">
    <a href="#" class="btn btn-primary small text-uppercase fw-bold px-4 py-3 position-relative" style="width: 300px;">San Francisco Office</a>
  </div>
</div>

<div class="bg-blue-lighter" style="padding: 200px 0;">
  <div class="lg-container">
    <h3 class="text-center">Samsara serves customers in North America and Europe and is headquartered in San Francisco with offices in Atlanta, London and Taiwan.</h3>
  </div>
</div>

<div class="lg-container my-5">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('assets/img/Open-Roles-Img.jpg') }}" alt="" class="w-100">
    </div>
    <div class="col-md-6" style="padding-left: 100px;">
      <h5 class="text-uppercase text-primary mb-4">Careers</h5>
      <h1 class="mb-4 fw-bold">Join the team changing how IoT powers our economy </h1>
      <a href="#" class="btn btn-outline-primary fw-bold small text-uppercase px-4 py-3">View open roles</a>
    </div>
  </div>
</div>
@endsection
