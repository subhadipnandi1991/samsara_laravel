@extends('master')

@section('content')
<div class="my-5">
  <div class="lg-container">
    <div class="row">
      <div class="col-md-5">
        <h1 class="mb-5 header-underline">Brand Assets</h1>
        <p class="text-xl">Download official Samsara logos, executive headshots, product images, and more.</p>
      </div>
      <div class="col-md-7">
        <img src="{{ asset('assets/img/2021_Hero_Desktop_Landscape.png') }}" alt="" class="w-100">
      </div>
    </div>
  </div>
</div>
<div class="my-4">
  <div class="lg-container">
    <div class="row">
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card mb-5">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/Samsara_Vertical_Logo_Navy.jpg') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-5" style="margin-top: 200px;">
                  <h4 class="text-white">Logos</h4>
                  <a href="#" class="no-underline fw-bold">Download Kit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card mb-5">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/JohnBicket_SanjitBiswas_0956_.5x.jpg') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-5" style="margin-top: 200px;">
                  <h4 class="text-white">Leadership</h4>
                  <a href="#" class="no-underline fw-bold">Download images</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card mb-5">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/og-image.jpg') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-5" style="margin-top: 200px;">
                  <h4 class="text-white">Videos</h4>
                  <a href="#" class="no-underline fw-bold">Download videos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card mb-5">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/officeTeam.jpg ') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-4" style="margin-top: 200px;">
                  <h4 class="text-white">Office & Team</h4>
                  <a href="#" class="no-underline fw-bold">Download images</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card mb-5">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/cs-row6-image-3.jpg.1') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-5" style="margin-top: 200px;">
                  <h4 class="text-white">Customers</h4>
                  <a href="#" class="no-underline fw-bold">Download images</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="my-5">
  <div class="lg-container">
    <div class="row mb-5">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/platform_hero.jpg') }}" alt="Card image cap" style="height: 180px;">
          <div class="card-body bg-blue-dark" style="height: 172px;">
            <h4 class="text-white">Platform</h4>
            <p class="card-text text-white mb-5">The Connected Operations Platform</p>
            <a href="" class="no-underline font-xl fw-bold">Download images</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/vehicle_telematics_gps_performance.jpg') }}" alt="Card image cap" style="height: 180px;">
          <div class="card-body bg-blue-dark" style="height: 172px;">
            <h4 class="text-white">Vehicle Telematics</h4>
            <p class="card-text text-white mb-4">Real-time GPS, routing, fuel, maintenance, electrification</p>
            <a href="" class="no-underline font-xl fw-bold">Download images</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/safety-val-1.jpg') }}" alt="Card image cap" style="height: 180px;">
          <div class="card-body bg-blue-dark" style="height: 172px;">
            <h4 class="text-white">Video-Based Safety</h4>
            <p class="card-text text-white mb-4">Dash cams, driver coaching, safety reports</p>
            <a href="" class="no-underline font-xl fw-bold">Download images</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/CW-viewspage_2.jpg') }}" alt="Card image cap" style="height: 180px;">
          <div class="card-body bg-blue-dark" style="height: 172px;">
            <h4 class="text-white">Apps & Driver Workflows</h4>
            <p class="card-text text-white mb-4">ELD, messaging, dispatch, and documents</p>
            <a href="" class="no-underline font-xl fw-bold">Download images</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/Minimize_Equipment_Downtime.jpeg') }}" alt="Card image cap" style="height: 180px;">
          <div class="card-body bg-blue-dark" style="height: 172px;">
            <h4 class="text-white">Equipment Monitoring</h4>
            <p class="card-text text-white mb-5">Location tracking, utilization, diagnostics</p>
            <a href="" class="no-underline font-xl fw-bold">Download images</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/Group-1602-_2_.jpg') }}" alt="Card image cap" style="height: 180px;">
          <div class="card-body bg-blue-dark" style="height: 172px;">
            <h4 class="text-white">Site Visibility</h4>
            <p class="card-text text-white mb-4">Remote visibility, proactive alerting, on-the-go access</p>
            <a href="" class="no-underline font-xl fw-bold">Download images</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
