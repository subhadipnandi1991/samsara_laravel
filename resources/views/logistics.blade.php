@extends('master')

@section('content')

<div class="" style='background-image: url("//images.ctfassets.net/bx9krvy0u3sx/5J0wKkDBXaL0UH58jdE6W6/e2f4f377e921b52c7d87010064ca0791/SurveyMonkey-img.jpg"); background-repeat: no-repeat; background-size:cover; height:460px;'>
  <div class="shadow-bg" style="height:460px;">
    <div>
      <div class="header-text col-md-6 col-sm-12" style="margin-left: 150px; padding-bottom:80px; padding-top:80px;">
        <h1 class="fs-48 text-white">Streamline your operations</h1>
        <p class="text-white">One platform for fleet management, driver safety, and compliance</p>
        <a href="#" class="btn btn-danger text-uppercase small p-3">check our prices</a>
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
  <div class="row px-5">
    <div class="co-md-1"></div>
    <div class="col-md-3">
      <img src="{{ asset('assets/img/1905_Samsara_Dohrn_4806.png') }}" alt="" class="w-100">
    </div>
    <div class="" style="z-index: -1; bottom: 40px; width: 601px; height: 511px; position: absolute; top: 900px; left: -12px;">
      <svg viewBox="0 0 663 553" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="illustrative-copy-26" transform="translate(-44.000000, -2751.000000)" stroke="#2DCCD3" stroke-width="2"><path d="M308,3162.65517 L308,3257 C132.66579,3243.75855 45,3151.06983 45,2978.93103 L45,2753 L308,2753 L308,3016.17241 L191.386792,3016.17241 C191.386792,3100.58663 230.257473,3149.41373 308,3162.65517 Z M637,3162.65517 L637,3257 C461.66579,3243.75855 374,3151.06983 374,2978.93103 L374,2753 L637,2753 L637,3016.17241 L520.386792,3016.17241 C520.386792,3100.58663 559.257473,3149.41373 637,3162.65517 Z" id="-copy-3" transform="translate(341.000000, 3005.000000) scale(1, -1) translate(-341.000000, -3005.000000)" vector-effect="non-scaling-stroke"></path></g></g></svg>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-6 mt-5">
      <h2 class="mb-4">The Samsara solution is so great for us it's not only improving our operating efficiency and saving us money, but also deeply engaging our employees in improving safety.</h2>
      <h6 class="text-uppercase">Michael Leathers</h6>
      <p class="fst-italic small">VP Administration, Dohrn Transfer Company</p>
      <a href="#" class="text-uppercase btn btn-outline-primary py-3">Read the case study</a>
    </div>
  </div>
</div>

<div class="bg-light text-center pb-5">
  <h3 class="py-5">Trusted by industry leaders</h3>
  <p class="px-5">
    <img src="{{ asset('assets/img/logistics-logos.jpg') }}" alt="" class="w-100 mb-3">
  </p>
  <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3">Learn More</a>
</div>

<div class="container">
  <div class="row py-5" style="margin-left: 100px;">
    <div class="col-md-4">
      <h3 class="mb-4">Track vehicles and trailers in real-time.</h3>
      <p class="mb-4">Get a birds-eye view of your fleet—from light and heavy duty vehicles to trailers and equipment—with real-time GPS tracking.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3">Learn More</a>
    </div>
    <div class="col-md-6" style="margin-left: 100px;">
      <video src="{{ asset('assets/img/Helicopter_View_new_nav.mp4') }}" autoplay poster="posterimage.jpg" class="w-100">

      </video>
    </div>
  </div>
  <div class="row py-5" style="margin-left: 100px;">
    <div class="col-md-6">
      <img src="{{ asset('assets/img/safety_screen2.png') }}" alt="safety" class="w-100">
      </video>
    </div>
    <div class="col-md-4" style="margin-left: 100px;">
      <h3 class="mb-4">Protect drivers with AI dash cams</h3>
      <p class="mb-4">AI dash cams capture incidents and exonerate and drivers, and coaching workflows help proactively train drivers to keep them safe.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3">Learn More</a>
    </div>
  </div>
  <div class="row py-5" style="margin-left: 100px;">
    <div class="col-md-4">
      <h3 class="mb-4">Improve the driver experience</h3>
      <p class="mb-4">Make day-to-day tasks easy for drivers with an all-in-one Driver App—complete with HOS logging, DVIRs, routing, messaging, documents, and more—available for Android and iOS.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3">Learn More</a>
    </div>
    <div class="col-md-6" style="margin-left: 100px;">
      <img src="{{ asset('assets/img/1905_Samsara_Dohrn_3312.jpg') }}" alt="1905_Samsara_Dohrn_3312.jpg" class="w-100">
    </div>
  </div>
</div>

<div class="bg-blue-lighter">
  <div class="row" style="padding:100px;">
    <div class="col-md-6" style="padding-left: 100px; padding-right: 100px;">
      <h3 class="mb-4">8 Actionable Tips for Improving Fleet Safety from an Award-Winning Fleet</h3>
      <p class="mb-4">Safety is a top priority for most fleet managers — but measurable safety improvements can be difficult to achieve. What are the secrets of the safest fleets on the road? Download this free 8-step guide to learn how Dohrn Transfer Company built their award-winning fleet safety program, with proven best practices straight from Dohrn’s leadership team.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3">Download</a>
    </div>
    <div class="col-md-6" style="padding-left: 100px; padding-right: 100px;">
      <img src="{{ asset('assets/img/dohrn.png') }}" alt="dohrn.png" class="w-100">

      </video>
    </div>
  </div>
</div>

<div id="slideCarousel">
  <div class="container">
    <div id="slide_1" class="row slides" style="box-shadow: 5px 5px 14px 0 rgba(0,0,0,.16);">
      <div class="col-md-5 p-0">
        <img src="{{ asset('assets/img/fames_trucks_1.jpg') }}" alt="safety" class="w-100" style="width:550px; height:414px;">
        </video>
      </div>
      <div class="col-md-6">
        <h3 class="my-4">7 Ways GPS Tracking Helps You Run a Safer Fleet</h3>
        <p class="mb-4">The value of real-time data goes well beyond GPS information. A telematics device that collects and integrates other real-time data - such as engine fault codes and harsh driving events - can be instrumental in helping you improve the efficiency, safety, and reliability of your entire fleet.</p>
        <a href="#" class="text-black no-underline teal-underline fw-bold small text-uppercase">
          Read the full article
        </a>
      </div>
    </div>
    <div id="slide_2" class="row slides" style="box-shadow: 5px 5px 14px 0 rgba(0,0,0,.16);">
      <div class="col-md-5 p-0">
        <img src="{{ asset('assets/img/face_detect.jpg') }}" alt="safety" class="w-100" style="width:550px; height:414px;">
        </video>
      </div>
      <div class="col-md-6">
        <h3 class="my-4">2020 Trends in Fleet</h3>
        <p class="mb-4">From smarter dash cams to more telematics features for electric vehicles, fleet managers can expect a lot of change as new technology emerges in the coming decade.</p>
        <a href="#" class="text-black no-underline teal-underline fw-bold small text-uppercase">
          Read the full article
        </a>
      </div>
    </div>
    <span>
      <div class="d-flex justify-center mt-5">
        <div class="row w-50 text-center">
          <div class="col-6">
            <a href="#" class="btn btn-outline-primary p-3 carousel-buttons previous" style="width:200px;">Previous</a>
          </div>
          <div class="col-6">
            <a href="#" class="btn btn-outline-primary p-3 carousel-buttons next" style="width:200px;">Next</a>
          </div>
        </div>

      </div>
    </span>
  </div>
</div>

<div class="bg-light p-5">
  <h2 class="text-center w-100 mb-5">Products</h2>
  <div class="row px-5">
    <div class="col-md-3">
      <img src="{{ asset('assets/img/VG-54.png') }}" alt="" class="w-100 bg-white mb-3">
      <h6>GPS Vehicle Gateway</h6>
      <ul>
        <li>Real-time GPS tracking</li>
        <li>Built-in WiFi hotspot</li>
        <li>Live engine diagnostics</li>
        <li>Customizable alerts</li>
        <li>FMCSA-certified ELD</li>
        <li>All-in-one Driver App</li>
      </ul>
    </div>
    <div class="col-md-3">
      <img src="{{ asset('assets/img/camera_main.jpg') }}" alt="" class="w-100 mb-3">
      <h6>High-Definition AI Dash Cameras</h6>
      <ul>
        <li>Front- and dual-facing HD cameras</li>
        <li>Automatic incident detection</li>
        <li>Safety Reporting</li>
        <li>Coaching workflows</li>
      </ul>
    </div>
    <div class="col-md-3">
      <img src="{{ asset('assets/img/AG26_Side_angle.jpg') }}" alt="" class="w-100 mb-3">
      <h6>Powered Asset Gateway</h6>
      <ul>
        <li>Real-time GPS tracking</li>
        <li>Asset dispatching</li>
        <li>Utilization reporting</li>
        <li>High-powered battery</li>
        <li>Compatible with Environmental Monitors</li>
      </ul>
    </div>
    <div class="col-md-3">
      <img src="{{ asset('assets/img/em21_pass.jpg') }}" alt="" class="w-100 mb-3">
      <h6>Environmental Monitors</h6>
      <ul>
        <li>Temperature and humidity logs</li>
        <li>Real-time alerts</li>
        <li>Wireless and waterproof</li>
        <li>Compatible with external temperature probe</li>
      </ul>
    </div>
  </div>
</div>

<div class="" style='background-image: url("//images.ctfassets.net/bx9krvy0u3sx/5wwJWqAlpaKtjWBhvSeOY8/cbe30fc71095cf7f46e0137325196a38/fleet_manager_trucking.jpg"); background-repeat: no-repeat; background-size:cover; height:460px; background-attachment: fixed;'>
  <div class="shadow-bg" style="height:460px;">
    <div class="text-center w-100" style="padding-top: 160px;">

        <h2 class="text-white mb-3">Get started with Samsara</h2>
        <a href="#" class="btn btn-primary text-uppercase small p-3">check our prices</a>

    </div>
  </div>
</div>
@endsection
