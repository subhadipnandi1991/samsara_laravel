@extends('master')

@section('content')

@foreach($singlePageDetails as $record)
<div class="">
  <img src="{{ $record['display-image'] }}" alt="">
  <div class="container">
    <div class="row">
      <div class="author-info col-md-8 col-sm-12 mx-auto">
        <div class="author-image d-inline ">
          <img src="{{ $record['author-image'] }}" class="rounded-circle border border-white border-solid" alt="author-image">
        </div>
        <div class="d-inline align-bottom ml-3">by {{ $record['author'] }}</div>
        <div class="text-uppercase text-blue my-5">{{ $record['blog-category'] }}</div>
        <h1 class="mb-5">{{ $record['title'] }}</h1>
        <div class="mb-3">{{ $record['created_at'] }}</div>
        <p class="font-italic mb-3">(Note: This article was originally published on April 26, 2021, and has been updated to reflect our latest information.)</p>
        <p class="mb-5">{{ $record['description'] }}</p>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
