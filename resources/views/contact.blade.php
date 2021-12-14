@extends('master')

@section('content')
<div class="bg-blue-lighter">
  <div class="container">
    <div class="row p-5">
      <div class="col-md-6 col-sm-12">
        <h1 class="my-5 px-4">Contact Us</h1>
        <div class="row">
          <div class="col-6 px-5">
            <h4 class="my-4">Sales</h4>
            <p>Get pricing the product information.</p>
            <a class="btn btn-primary text-uppercase p-3 small" href="#">Contact Sales</a>
          </div>
          <div class="col-6 px-3">
            <h4 class="my-4">Support</h4>
            <p>Access our world-class support services, live 24/7.</p>
            <a class="btn btn-primary text-uppercase p-3 small" href="#">Contact Support</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <img src="{{ asset('assets/img/sales_staff.jpg') }}" alt="" class="w-100">
      </div>
    </div>
  </div>
</div>

<div class="w-full container">
  <div class="py-4 px-5">
    <h2>Samsara offices around the world</h2>
  </div>
  <div class="row px-5">
    <div class="col-8">
      <img src="{{ asset('assets/img/HQ_front_desk.jpg') }}" alt="" class="w-100">
    </div>
    <div class="col-4">
      <h4>Samsara HQ</h4>
      <p>350 Rhode Island Street<br>
        4th Floor, South Building<br>
        San Francisco, CA 94103<br>
        (415) 985-2400
      </p>
      <p>
        General: info@samsara.com<br>
        Media: media@samsara.com
      </p>
    </div>
  </div>
  <div class="row p-5">
    <div class="col-4">
      <h4>Atlanta</h4>
      <p>
        1170 Peachtree Street, 10th Floor<br>
        Atlanta, GA 30309
      </p>
    </div>
    <div class="col-4">
      <h4>Mexico</h4>
      <p>
        Polanco, Ciudad de Mexico<br>
        C.P. 11560<br>
        +52 (55) 65990366<br>
        Ventas: ventas-mx@samsara.com<br>
      </p>
    </div>
    <div class="col-4">
      <h4>London EU HQ</h4>
      <p>
        1 Alie Street, Fourth Floor, <br>
        London E1 8DE, UK<br>
        Sales: +44 (0) 20 3965 2700<br>
      </p>
    </div>
  </div>
  <div class="row p-5">
    <div class="col-4">
      <h4>Amsterdam</h4>
      <p>
        Samsara Nederland B.V. <br>
        Barbara Strozzilaan 101, <br>
        Suite 2.01 <br>
        Amsterdam, 1083 HN, Netherlands <br>
      </p>
    </div>
    <div class="col-4">
      <h4>Taiwan</h4>
      <p>
        15F, No. 80, Section 1, Zhongxiao West Road, Zhongzheng
        District, Taipei City 100, Taiwan (R.O.C.)
      </p>
    </div>
    <div class="col-4">
      <h4>Others</h4>
      <p>
        For all other inquiries, contact us at info@samsara.com
      </p>
    </div>
  </div>

</div>


@endsection
