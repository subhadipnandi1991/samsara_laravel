@extends('master')

@section('content')
<div id="main-blog-page" class="container">
  <div class="row">
    <div class="col-md-3 p-4">
      <ul class="no-bullet-list">
        <li class="custom-list">
          <a class="custom-anchor no-underline text-black" href="#">View All</a>
        </li>
        @foreach($allCategory as $category)
        <li class="custom-list">
          <a class="custom-anchor no-underline text-black" href="#">{{ $category['blog-category'] }}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="col-md-9 p-4 row blog-area">
      <!-- @foreach($blogDetails as $singleBlog) -->

      <!-- @endforeach -->
    </div>
  </div>
</div>
@endsection
