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

<div class="container">
  <div class="row py-5" style="margin-left: 100px;">
    <div class="col-md-6">
      <img src="{{ asset('assets/img/190607_SamsaraUnitiFiber_0534__1_.jpg') }}" alt="SamsaraUnitiFiber" class="w-100 p-5">
      <img class="bg-lines " src="{{ asset('assets/img/radial_pattern_teal.svg') }}">
    </div>
    <div class="col-md-4" style="margin-left: 100px; margin-top: 100px;">
      <h3 class="mb-4">Dedicated implementation services</h3>
      <p class="mb-4">Experience 30+ days of onboarding and implementation service with a Customer Success lead to get you up and running smoothly on the Samsara platform.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3 fw-bold">Learn More</a>
    </div>
  </div>
  <div class="row py-5" style="margin-left: 100px; margin-top: 100px;">
    <div class="col-md-4">
      <h3 class="mb-4">Expert-led training</h3>
      <p class="mb-4">Your entire team has access to live trainings and a library of step-by-step videos to guide you through onboarding and beyond.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3 fw-bold">Learn More</a>
    </div>
    <div class="col-md-6" style="margin-left: 100px; margin-top: -100px;">
      <img src="{{ asset('assets/img/1905_Samsara_Dohrn_4264.jpg') }}" alt="Samsara_Dohrn.jpg" class="w-100 p-5">
      <img class="bg-lines even" src="{{ asset('assets/img/radial_pattern_teal.svg') }}">
    </div>
  </div>
  <div class="row py-5" style="margin-left: 100px;">
    <div class="col-md-6">
      <img src="{{ asset('assets/img/Samsara_SFsales_072.jpeg') }}" alt="SFsales" class="w-100 p-5">
      <img class="bg-lines " src="{{ asset('assets/img/radial_pattern_teal.svg') }}">

      </video>
    </div>
    <div class="col-md-4" style="margin-left: 100px; margin-top: 100px;">
      <h3 class="mb-4">Responsive 24/7 support</h3>
      <p class="mb-4">Whatever the road brings, we want to deliver the best experience possible, and that’s why we have a 24/7 in-house Support team. With Samsara you talk to real people—not robots. Easily get a hold of us via phone or web.</p>
      <a href="#" class="btn btn-outline-primary small text-uppercase px-4 py-3 fw-bold">contact support</a>
    </div>
  </div>
</div>

<div class="bg-blue-lighter">
  <div class="pt-5 text-center">
    <h1 class="pb-4">Customer Resources</h1>
    <p class="pb-5">Tap into our events, webinars, live trainings, and more led by Samsara experts. </p>
  </div>
  <div class="lg-container">
    <div class="row">
      <div class="col-md-4 px-4">
        <img src="{{ asset('assets/img/icon_events.svg') }}" alt="" style="max-width:97px;max-height: 71px;">
        <h2 class="pb-3">Events</h2>
        <p class="pb-4">Connect with us in-person at events around the globe to network with peers, meet product experts, and get your questions answered.</p>
      </div>
      <div class="col-md-4 px-4">
        <img src="{{ asset('assets/img/icon_webinar.svg') }}" alt="" style="max-width:97px;max-height: 71px;">
        <h2 class="pb-3">Webinars & Live Trainings</h2>
        <p class="pb-4">Join us for live product deep dives or stream trainings from our library of learning videos.</p>
      </div>
      <div class="col-md-4 px-4">
        <img src="{{ asset('assets/img/icon_kb.svg') }}" alt="" style="max-width:97px;max-height: 71px;">
        <h2 class="pb-3">Knowledge Base</h2>
        <p class="pb-4">Browse common questions or connect with our in-house support team, available 24/7.</p>
      </div>

    </div>
    <div class="row pb-5">
      <div class="col-md-4 px-4">
        <a href="#" class="text-uppercase no-underline text-black small fw-bold teal-underline">View Upcoming Events</a>
      </div>
      <div class="col-md-4 px-4">
        <a href="#" class="text-uppercase no-underline text-black small fw-bold teal-underline">See Upcoming Webinars</a>
      </div>
      <div class="col-md-4 px-4">
        <a href="#" class="text-uppercase no-underline text-black small fw-bold teal-underline">Get Support</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 px-4">
        <img src="{{ asset('assets/img/icon_tips.svg') }}" alt="" style="max-width:97px;max-height: 71px;">
        <h2 class="pb-3">Tips from Super Users</h2>
        <p class="pb-4">Hear from Samsara customers, partners, and experts to discover answers and spark new ideas.</p>
      </div>
      <div class="col-md-4 px-4">
        <img src="{{ asset('assets/img/icon_blog.svg') }}" alt="" style="max-width:97px;max-height: 71px;">
        <h2 class="pb-3">Blog</h2>
        <p class="pb-4">Read about our latest product news and upcoming trends in the industry.</p>
      </div>
      <div class="col-md-4 px-4">
        <img src="{{ asset('assets/img/icon_marketplace.svg') }}" alt="" style="max-width:97px;max-height: 71px;">
        <h2 class="pb-3">Samsara App Marketplace</h2>
        <p class="pb-4">Learn about our newest third party integrations and how to connect your most critical business systems to Samsara.</p>
      </div>

    </div>
    <div class="row pb-5">
      <div class="col-md-4 px-4">
        <a href="#" class="text-uppercase no-underline text-black small fw-bold teal-underline">See Tips</a>
      </div>
      <div class="col-md-4 px-4">
        <a href="#" class="text-uppercase no-underline text-black small fw-bold teal-underline">Read Blog</a>
      </div>
      <div class="col-md-4 px-4">
        <a href="#" class="text-uppercase no-underline text-black small fw-bold teal-underline">View Marketplace</a>
      </div>
    </div>
  </div>
</div>

<div id="slideCarousel">
  <div class="container">
    <div id="slide_1" class="row slides" style="box-shadow: 5px 5px 14px 0 rgba(0,0,0,.16);">
      <div class="col-md-5 p-0">
        <img src="{{ asset('assets/img/Untitled_presentation__9_.jpg') }}" alt="safety" class="w-100">
        </video>
      </div>
      <div class="hollow-quotes">
        <!--?xml version="1.0" encoding="UTF-8"?-->
        <svg width="91px" height="77px" viewBox="0 0 91 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="pre_sale_hub_v4" transform="translate(-618.000000, -3652.000000)" stroke="#2DCCD3">
                    <path d="M708,3709.5225 L708,3728 C682.663833,3726.00923 670,3712.42209 670,3687.23959 L670,3653 L708,3653 L708,3691.58747 L695.503356,3691.58747 C695.503356,3697.74798 696.180611,3702.00629 697.543624,3704.35938 C698.902859,3706.7155 702.389262,3708.43553 708,3709.5225 M657,3709.5225 L657,3728 C631.663833,3726.00923 619,3712.42209 619,3687.23959 L619,3653 L657,3653 L657,3691.58747 L644.503356,3691.58747 C644.503356,3697.74798 645.180611,3702.00629 646.543624,3704.35938 C647.902859,3706.7155 651.389262,3708.43553 657,3709.5225" id="Fill-1-Copy-8" transform="translate(663.500000, 3690.500000) scale(1, -1) translate(-663.500000, -3690.500000) ">
                    </path>
                </g>
            </g>
        </svg>
      </div>
      <div class="col-md-6" style="padding-top: 40px; padding-left: 30px;">
        <p class="mb-4">It's very obvious Samsara cares about our feedback. That also gives us a lot more confidence in their products."</p>
        <h6 class="text-uppercase">Shaun Leone</h6>
        <p class="fst-italic small">President, Sunburst Truck Lines Inc</p>

      </div>
    </div>
    <div id="slide_2" class="row slides" style="box-shadow: 5px 5px 14px 0 rgba(0,0,0,.16);">
      <div class="col-md-5 p-0">
        <img src="{{ asset('assets/img/Untitled_presentation__6_.jpg') }}" alt="safety" class="w-100">
        </video>
      </div>
      <div class="hollow-quotes">
        <!--?xml version="1.0" encoding="UTF-8"?-->
        <svg width="91px" height="77px" viewBox="0 0 91 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="pre_sale_hub_v4" transform="translate(-618.000000, -3652.000000)" stroke="#2DCCD3">
                    <path d="M708,3709.5225 L708,3728 C682.663833,3726.00923 670,3712.42209 670,3687.23959 L670,3653 L708,3653 L708,3691.58747 L695.503356,3691.58747 C695.503356,3697.74798 696.180611,3702.00629 697.543624,3704.35938 C698.902859,3706.7155 702.389262,3708.43553 708,3709.5225 M657,3709.5225 L657,3728 C631.663833,3726.00923 619,3712.42209 619,3687.23959 L619,3653 L657,3653 L657,3691.58747 L644.503356,3691.58747 C644.503356,3697.74798 645.180611,3702.00629 646.543624,3704.35938 C647.902859,3706.7155 651.389262,3708.43553 657,3709.5225" id="Fill-1-Copy-8" transform="translate(663.500000, 3690.500000) scale(1, -1) translate(-663.500000, -3690.500000) ">
                    </path>
                </g>
            </g>
        </svg>
      </div>
      <div class="col-md-6" style="padding-top: 40px; padding-left: 30px;">
        <p class="mb-4">Everyone is very very committed. Other vendors hand you their product and you may or may not hear from them again, unless you have a problem and you raise your hand and you scream. But with Samsara, everyone wants to talk, and everyone wants to help you."</p>
        <h6 class="text-uppercase">RACHELLE ROSE</h6>
        <p class="fst-italic small">General Manager, Need It Now Delivers</p>
      </div>
    </div>
    <div id="slide_3" class="row slides" style="box-shadow: 5px 5px 14px 0 rgba(0,0,0,.16);">
      <div class="col-md-5 p-0">
        <img src="{{ asset('assets/img/Untitled_presentation__7_.jpg') }}" alt="safety" class="w-100">
        </video>
      </div>
      <div class="hollow-quotes">
        <!--?xml version="1.0" encoding="UTF-8"?-->
        <svg width="91px" height="77px" viewBox="0 0 91 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="pre_sale_hub_v4" transform="translate(-618.000000, -3652.000000)" stroke="#2DCCD3">
                    <path d="M708,3709.5225 L708,3728 C682.663833,3726.00923 670,3712.42209 670,3687.23959 L670,3653 L708,3653 L708,3691.58747 L695.503356,3691.58747 C695.503356,3697.74798 696.180611,3702.00629 697.543624,3704.35938 C698.902859,3706.7155 702.389262,3708.43553 708,3709.5225 M657,3709.5225 L657,3728 C631.663833,3726.00923 619,3712.42209 619,3687.23959 L619,3653 L657,3653 L657,3691.58747 L644.503356,3691.58747 C644.503356,3697.74798 645.180611,3702.00629 646.543624,3704.35938 C647.902859,3706.7155 651.389262,3708.43553 657,3709.5225" id="Fill-1-Copy-8" transform="translate(663.500000, 3690.500000) scale(1, -1) translate(-663.500000, -3690.500000) ">
                    </path>
                </g>
            </g>
        </svg>
      </div>
      <div class="col-md-6" style="padding-top: 40px; padding-left: 30px;">
        <p class="mb-4">Our driver onboarding training went from 90 minutes down to 15 minutes. Samsara's intuitiveness allowed for us to be more efficient - our drivers got it immediately."</p>
        <h6 class="text-uppercase">BILL CHILSON</h6>
        <p class="fst-italic small">Director of Business, Outwest Express LLC</p>
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

<div class="text-center" style='padding: 200px;'>
  <h1 class="mb-3 fw-bold">Questions?</h1>
  <p class="pb-5">Our in-house support team is available 24/7.</p>
  <a href="#" class="text-uppercase small btn btn-primary p-3">contact support</a>
  <a href="#" class="text-uppercase small btn btn-outline-primary p-3">Check our prices</a>
</div>

@endsection
