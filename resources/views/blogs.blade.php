@extends('master')

@section('content')
<div class="container">
  <div class="col-md-3 p-4">
    <ul class="no-bullet-list">
      @foreach($allCategory as $category)
      <li class="custom-list">
        <a class="custom-anchor no-underline text-black" href="#{{ $category['blog-category'] }}">{{ $category['blog-category'] }}</a>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection
