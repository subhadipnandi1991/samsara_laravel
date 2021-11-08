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
    <div class="col-md-9 p-4 row">
      @foreach($blogDetails as $singleBlog)
      <div class="col-md-6 col-sm-12">
        <div class="card m-4 blog-card">
          <img class="card-img-top" src="{{ $singleBlog['display-image'] }}" alt="Card image cap">
          <div class="card-body m-4">
            <h5 class="card-title">{{ $singleBlog['title'] }}</h5>
            <a class="text-uppercase no-underline small font-bold" href="#">{{ $singleBlog['blog-category'] }}</a>
            <p class="card-text my-4">{{ strlen($singleBlog['description']) > 50 ? substr($singleBlog['description'], 0, 100)."..." : $singleBlog['description'] }}</p>
            <a href="{{route('blogDetails', ['id' => $singleBlog['id']])}}" class="text-uppercase no-underline small font-bold read-more-blog">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
