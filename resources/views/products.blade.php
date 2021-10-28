@extends('master')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <ul class="no-bullet-list">
        @foreach($distinctCategory as $category)
        <li class="custom-list">
          <a class="custom-anchor no-underline text-black" href="#">{{ $category['product-category'] }}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="col-md-9">
      @foreach($distinctCategory as $category)
      <h1 class="mx-5">{{ $category['product-category'] }}</h1>
        <div id="{{ $category['product-category'] }}" class="m-5 py-3 border-bottom">
          <div class="row pb-3">
            @foreach($productDetails as $details)
              @if($details['product-category'] == $category['product-category'])
                <div class="col-md-6 col-sm-12 p-4">
                  <h3 class="pb-2">{{ $details['name'] }}</h3>
                  <p class="pb-2">{{ $details['description'] }}</p>
                  <a class="text-uppercase no-underline small font-bold" href="#">Learn More ></a>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      @endforeach
      <div class="m-5 py-3" id="Hardware">
        <div class="row">
          <div class="col-md-6 col-sm-12 m-auto">
            <a class="text-uppercase no-underline small font-bold" href="#">
              VIEW HARDWARE MODELS & SPECS >
            </a>
          </div>
          <div class="col-md-6 col-sm-12">
            <img style="width:350px; height:auto;" src="https://images.ctfassets.net/bx9krvy0u3sx/3rBNFmeft6fnvkops0hSnd/0bb41d0f1186c87bf932c71a9fe3543a/ProductFamily_2020_US.png" alt="hardware">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
