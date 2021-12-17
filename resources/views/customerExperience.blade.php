@extends('master')

@section('content')
<section id="solutions-hero-section">
  <div class="hero--solutions position-relative z-10">
    <div class="w-100 container" style="padding: 80px 0 80px 0;">
      <div class="row px-5">
        <div class="col-md-6">
          <img src="{{ asset('assets/img/Customer-experience-hero-desk.jpg') }}" alt="" class="w-100">
        </div>
        <div class="col-md-6">
          <p class="text-white mt-3">
            <strong>
              Samsara for customer experience
            </strong>
          </p>
          <h1 class="text-white mt-3">Align your operations around your customers</h1>
          <p class="text-white mt-3">80% of customers believe that the experience you provide is as important as what you deliver. Serve your customers on their terms and reduce work for your team with Samsara.</p>
          <a href="#" class="btn btn-primary small text-uppercase fw-bold mt-3 p-3">Guide to Retain Customers</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row py-5 mt-5" style="margin-left: 100px;">
    <div class="col-md-4">
      <h3 class="mb-4">Fewer phone calls make happier customers</h3>
      <p class="mb-4">Reduce check-in calls and status update requests by keeping customers informed with automated alerts and data-driven ETAs.</p>
      <p>
        <strong class="text-uppercase">
          key benefits
        </strong>
      </p>
      <ul>
        <li>Give updates on-demand with live sharing</li>
        <li>Never miss a stop with seamless routing</li>
        <li>Speed up service with digital workflows</li>
      </ul>
      <a href="#" class="btn btn-outline-primary small text-uppercase p-3">Read case study</a>
    </div>
    <div class="col-md-6" style="margin-left: 100px;">
      <img src="{{ asset('assets/img/customer-experience-val-1.jpg')}}" alt="" class="w-100">
    </div>
  </div>
  <div class="row py-5 mt-5" style="margin-left: 100px;">
    <div class="col-md-4">
      <h3 class="mb-4">Digitize records your reputation relies on</h3>
      <p class="mb-4">Ensure you and your customers are on the same page by digitizing key documents and automating reports such as Proof of Delivery, Trip Temperature History, Time on Site, and more.</p>
      <p>
        <strong class="text-uppercase">
          key benefits
        </strong>
      </p>
      <ul>
        <li>Capture eSignatures with the Driver App</li>
        <li>Reinforce records with GPS data</li>
        <li>Monitor cargo at all times with sensors</li>
      </ul>
      <a href="#" class="btn btn-outline-primary small text-uppercase p-3">documents and messaging</a>
    </div>
    <div class="col-md-6" style="margin-left: 100px;">
      <img src="{{ asset('assets/img/Group_1220.jpg')}}" alt="" class="w-100">
    </div>
  </div>
  <div class="row py-5 mt-5" style="margin-left: 100px;">
    <div class="col-md-4">
      <h3 class="mb-4">Ensure each team knows your customer</h3>
      <p class="mb-4">Make customer data accessible between departments so that customers receive a seamless experience.</p>
      <p>
        <strong class="text-uppercase">
          key benefits
        </strong>
      </p>
      <ul>
        <li>Unify systems with pre-built integrations</li>
        <li>Bring customer data into one dashboard</li>
        <li>Access key data with the Admin App</li>
      </ul>
      <a href="#" class="btn btn-outline-primary small text-uppercase p-3">documents and messaging</a>
    </div>
    <div class="col-md-6" style="margin-left: 100px;">
      <img src="{{ asset('assets/img/customer-experience-val-3.jpg')}}" alt="" class="w-100">
    </div>
  </div>
</div>

<div class="bg-blue-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-9">

      </div>
    </div>
  </div>
</div>



@endsection
