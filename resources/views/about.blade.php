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

<div id="timeline-carousel" class="position-relative">
  <div class="lg-container my-5 bg-blue-lighter" style="border-radius: 40px; padding: 80px;">
    <div id="timeline-1" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Starting Samsara</h1>
        <p>Samsara was founded by Sanjit Biswas and John Bicket, who previously co-founded Meraki (now part of Cisco Systems), to digitize the world of operations. Our mission: to increase the safety, efficiency, and sustainability of the operations that power our economy.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/sanjit-john2x.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-2" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Obsessing over our customers</h1>
        <p>We instituted the strong customer feedback loop which had served us so well at Meraki: “obsess over customers.” Using this same method, we collected feedback on our first prototype and discovered a great untapped market opportunity that we were uniquely positioned to solve.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/cowgirl-creamery.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-3" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Launching our first products</h1>
        <p>We initially focused on fleet operations and discovered a need for real-time updates while vehicles were in transit. One of our initial products was the Vehicle Gateway that tracked temperature, GPS location, and vehicle diagnostic information. Now, fleet managers could connect with their drivers like never before.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/first-products.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-4" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Beyond GPS to connected dash cams</h1>
        <p>Our customers began asking us whether we could integrate with or offer our own dash cams. It was clear there was a problem the market was trying to solve, and we sought a way to help. We started testing a webcam connected to the USB port of our Vehicle Gateway.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/beyond-gps.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-5" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Refining our product and roadmap</h1>
        <p>We continued to iterate and improve on our offerings by relying on the customer-driven feedback loop that is the foundation of our product development. One such new product was the CM11, a dash cam that we developed based on our customers’ need to more easily see what happened in the time leading up to and immediately after an accident or near-miss.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/roadmap.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-6" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Building on success</h1>
        <p>After the success of our initial dash cam offering, we made updates based on customer feedback to add an inward-facing camera, the CM22, so fleet managers could coach their drivers on unsafe driving habits and help avoid accidents altogether.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/build-success.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-7" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Leveraging AI technology</h1>
        <p>We added artificial intelligence capabilities to the Samsara Connected Operations Cloud so the technology could automatically detect and alert drivers to potential safety risks, such as distracted driving.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/ai-tech2.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-8" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">International expansion</h1>
        <p>At this time, we opened our first international office in London, to better serve our customers in the United Kingdom and Ireland. As we’ve modified and launched new solutions to meet regional needs, we’ve since been able to expand our offerings to customers in Canada, Mexico, France, and Germany.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/international.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-9" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Enhancing a holistic safety program</h1>
        <p>As a way to incentivize drivers, we enhanced our driver safety program with leaderboards to recognize and reward good driving habits. We also launched coaching workflows for larger fleets to help them track and manage any follow up actions required after an identified issue.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/safety-program.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-10" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Meeting our customers wherever they are</h1>
        <p>As our momentum rapidly increased, we needed to scale our team and products across the U.S. region. To meet this need, Samsara opened our first East Coast office in Atlanta. By opening this new location, we became better equipped to reach our ever-expanding customer base wherever they were.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/atl-office.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-11" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Running AI at the edge</h1>
        <p>Real-time alerts became ever more critical, not just for coaches back at the home office, but also to help drivers take immediate corrective actions to prevent accidents. We introduced the CM31 and CM32 dash cams that could run state-of-the-art AI technology on the cameras themselves.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/running-ai.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-12" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Adapting to a new way of working</h1>
        <p>During the pandemic, we adjusted to operating remotely, ensured customers received uninterrupted service from our team, and developed new solutions to help customers adapt (e.g., sanitation checks in DVIRs). Our highest priority, then and always, is to protect the safety of our customers and community.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/adpating-work.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-13" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">The Connected Operations Cloud</h1>
        <p>With innovations in telematics, equipment monitoring, and worksite visibility, Samsara is enabling the digital transformation of operations, with more to come. The Connected Operations Cloud, our integrated platform, increases the safety, efficiency, and sustainability of our customers’ operations.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/connected-cloud.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-14" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">The future of work at Samsara</h1>
        <p>Like so many others, our employees worked remotely to continue to support our customers (many of whom are essential businesses) during the pandemic. We examined the future of work at Samsara and developed a model rooted in flexibility— offering hybrid and fully remote options depending on role.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/future-work.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-15" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">100 integrations on our App Marketplace</h1>
        <p>Samsara's API connects our customers’ most important third-party applications with Samsara's Connected Operations Cloud to unlock a more holistic view of their data in real-time. In May 2021, the Samsara App Marketplace reached 100 integrations with our global partners. We continue to expand our ecosystem of software integrations.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/app-integrations.jpg') }}" alt="" class="w-100">
      </div>
    </div>

    <div id="timeline-16" class="row tl-slides">
      <div class="col-md-6">
        <h5 class="text-uppercase text-primary mb-4">Our History</h5>
        <h1 class="mb-4 fw-bold">Samsara is a publicly-traded company</h1>
        <p>Samsara announced that we are now a publicly-traded company on the NYSE under the ticker symbol IOT. We recognize the IPO is an exciting milestone but we’re just getting started. Our focus has always been on building a long-term business with positive social impact and Samsara is positioned to lead the digital transformation of the world’s physical operations.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/img/About_Public.png') }}" alt="" class="w-100">
      </div>
    </div>

      <div class="prev--arrow timeline-arrow position-absolute" tabindex="0" role="button" aria-label="Previous slide" class="position-absolute" style="left: 165px;">
        <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-039decfc="">
          <circle cx="46.5" cy="46.5" r="46.5" fill="#0384FB" data-v-039decfc=""></circle>
          <path d="M49.7069 30.4653L65.7413 46.4998L49.7069 62.5343" stroke="white" stroke-width="5" data-v-039decfc=""></path>
          <path d="M65.7415 46.5H22.4484" stroke="white" stroke-width="5" data-v-039decfc=""></path>
        </svg>
      </div>

      <div class="next--arrow timeline-arrow position-absolute" tabindex="0" role="button" aria-label="Next slide" class="position-absolute" style="right: 165px;">
        <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="46.5" cy="46.5" r="46.5" fill="#0384FB"></circle>
          <path d="M49.7069 30.4653L65.7413 46.4998L49.7069 62.5343" stroke="white" stroke-width="5"></path>
          <path d="M65.7415 46.5H22.4484" stroke="white" stroke-width="5"></path>
        </svg>
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
        <div id="members-1" class="members-slide">
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
        <div id="members-2" class="members-slide">
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

<div id="office_carousel" class="position-relative">
  <div class="w-100">
    <div id="office-1" class="offc-slides">
      <img  src="{{ asset('assets/img/original_6.jpg') }}" alt="" class="w-100">
      <a href="#" class="btn btn-primary small text-uppercase fw-bold px-4 py-3 position-absolute" style="width: 300px; margin-top: 600px; right: 30px;">Atlanta Office</a>
    </div>
    <div id="office-2" class="offc-slides">
      <img src="{{ asset('assets/img/UK-img.jpg') }}" alt="" class="w-100">
      <a href="#" class="btn btn-primary small text-uppercase fw-bold px-4 py-3 position-absolute" style="width: 300px; margin-top: 600px; right: 30px;">London Office</a>
    </div>
    <div id="office-3" class="offc-slides">
      <img src="{{ asset('assets/img/Office-Slider-Image-SF8.jpg') }}" alt="" class="w-100">
      <a href="#" class="btn btn-primary small text-uppercase fw-bold px-4 py-3 position-absolute" style="width: 300px; margin-top: 600px; right: 30px;">San Francisco Office</a>
    </div>
  </div>

  <div class="prev--arrow offc-car-arrow position-absolute" tabindex="0" role="button" aria-label="Previous slide" class="position-absolute">
    <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-039decfc="">
      <circle cx="46.5" cy="46.5" r="46.5" fill="#0384FB" data-v-039decfc=""></circle>
      <path d="M49.7069 30.4653L65.7413 46.4998L49.7069 62.5343" stroke="white" stroke-width="5" data-v-039decfc=""></path>
      <path d="M65.7415 46.5H22.4484" stroke="white" stroke-width="5" data-v-039decfc=""></path>
    </svg>
  </div>

  <div class="next--arrow offc-car-arrow position-absolute" tabindex="0" role="button" aria-label="Next slide" class="position-absolute">
    <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="46.5" cy="46.5" r="46.5" fill="#0384FB"></circle>
      <path d="M49.7069 30.4653L65.7413 46.4998L49.7069 62.5343" stroke="white" stroke-width="5"></path>
      <path d="M65.7415 46.5H22.4484" stroke="white" stroke-width="5"></path>
    </svg>
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
