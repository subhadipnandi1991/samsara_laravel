@extends('master')

@section('content')
<div class="container">
  <div class="col-md-3">
    <ul class="no-bullet-list">
      @foreach($results as $result)
      <li class="custom-list"><a class="custom-anchor no-underline text-black" href="#">{{ $result['product-category'] }}</a></li>
      @endforeach
    </ul>
  </div>
  <div class="col-md-9">

  </div>

</div>
@endsection
