@extends('frontend.layouts.master')
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-one">
                  <h2>Section One</h2>
                  <div class="row">

                   @php $i = 1; @endphp

                   @foreach ($postcontents as $postcontent)

                    @if ($i == 1)
                        <div class="col-md-6">
                            <img src="{{ asset('public/images').'/'. $postcontent->image }}" alt="">
                            <h4> <a href="{{ route('postcontent.single', $postcontent->id) }}">{{ $postcontent->title }}</a></h4>
                            <p>{{ $postcontent->description }}</p>
                        </div>
                    @endif

                    @php $i--; @endphp

                    @endforeach


                    <div class="col-md-6">
                        <div class="row">

                        @php $i = 2; @endphp

                        @foreach ($postcontents as $postcontent)

                            @if ($i > 2)
                            <div class="col-md-6">
                            <img src="{{ asset('public/images').'/'. $postcontent->image }}" alt="">
                            <h6><a href="{{ route('postcontent.single', $postcontent->id) }}">{{ $postcontent->title }}</a></h6>
                            </div>
                            @endif

                            @php $i++; @endphp

                        @endforeach

                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-1"><hr class="mart-hr"></div>
            <div class="col-md-4">
                <div class="section-two">
                  <h2>Section Two</h2>
                  <div class="row">
                    @php $i = 1; @endphp

                    @foreach ($postcontenttwo as $postcontent)

                     @if ($i == 1)
                    <div class="col-md-12">
                        <img src="{{ asset('public/images').'/'. $postcontent->image }}" alt="">
                        <h4><a href="{{ route('postcontent.single', $postcontent->id) }}">{{ $postcontent->title }}</a></h4>
                        <p>{{ $postcontent->description }}</p>
                    </div>
                    @endif

                    @php $i--; @endphp

                    @endforeach
                    <div class="col-md-12 side-top">
                        <div class="row">
                            @php $i = 2; @endphp

                        @foreach ($postcontenttwo as $postcontent)

                            @if ($i > 2)
                            <div class="col-md-6">
                                <img src="{{ asset('public/images').'/'. $postcontent->image }}" alt="">
                                <h6><a href="{{ route('postcontent.single', $postcontent->id) }}">{{ $postcontent->title }}</a></h6>
                            </div>
                            @endif

                            @php $i++; @endphp

                        @endforeach
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
