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
                  <h3 class="text-white">Logos</h3>
                  <a href="#" class="no-underline fw-bold">Download Kit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/JohnBicket_SanjitBiswas_0956_.5x.jpg') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-5" style="margin-top: 200px;">
                  <h3 class="text-white">Leadership</h3>
                  <a href="#" class="no-underline fw-bold">Download images</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/og-image.jpg') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-5" style="margin-top: 200px;">
                  <h3 class="text-white">Videos</h3>
                  <a href="#" class="no-underline fw-bold">Download videos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/officeTeam.jpg ') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-5" style="margin-top: 200px;">
                  <h3 class="text-white">Office & Team</h3>
                  <a href="#" class="no-underline fw-bold">Download images</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9">
        <div class="container">
          <div class="card">
            <div class="row">
              <div class="col-6 p-0">
                <img src="{{ asset('assets/img/cs-row6-image-3.jpg.1') }}" alt="" class="w-100" style="height:300px;">
              </div>
              <div class="col-6 p-0 bg-blue-dark">
                <div class="text-left px-5" style="margin-top: 200px;">
                  <h3 class="text-white">Customers</h3>
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
@endsection
