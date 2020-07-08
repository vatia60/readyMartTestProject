@extends('frontend.layouts.master')
@section('content')

<div class="container section-one">
  <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
          @if ($postcontent->section_id == 1)

            <iframe width="100%" height="444" src="{{ $postcontent->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4> {{ $postcontent->title }}</h4>
            <p>{{ $postcontent->description }}</p>

            @else

            <img src="{{ asset('public/images').'/'. $postcontent->image }}" alt="">
            <h4> {{ $postcontent->title }}</h4>
            <p>{{ $postcontent->description }}</p>

          @endif
<div class="nrw">
    <a href="https://www.facebook.com/sharer/sharer.php?u=YourPageLink.com&display=popup"> share this </a>
</div>
      </div>
      <div class="col-md-3"></div>
  </div>
</div>

@endsection



