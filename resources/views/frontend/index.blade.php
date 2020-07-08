@extends('frontend.layouts.master')
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">

            <div class="col-md-7">
                @php
                    $counter = 1;
                @endphp
                @foreach($sections as $section)
                @if($counter%2 !==0)
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-one">
                            <h2>{!! $section->section_name !!}</h2>
                            @if(count($section->contents) > 0)
                            <div class="row">

                             @php
                              $postcontent = $section->contents->first();

                             @endphp

                             <div class="col-md-6">
                              <img src="{{ asset('public/images').'/'. $postcontent->image }}" alt="">
                              <h4> <a href="{{ route('postcontent.single', $postcontent->id) }}">{{ $postcontent->title }}</a></h4>
                              <p>{{ $postcontent->description }}</p>
                             </div>




                              <div class="col-md-6">
                                  <div class="row">

                                  @php $i = 2; @endphp

                                  @foreach ($section->contents->take(4) as $postcontent)

                                      @if ($i >= 2)
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
                            @endif
                          </div>
                    </div>
                </div>
                @endif
                @php
                    $counter++
                 @endphp
                @endforeach
            </div>
            <div class="col-md-1"><hr class="mart-hr"></div>
            <div class="col-md-4">
                @php
                    $counter = 1;
                @endphp
                 @foreach($sections as $section)
                 @if($counter%2 ==0)
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-two">
                                <h2>{!! $section->section_name !!}</h2>
                                @if(count($section->contents) > 0)
                                <div class="row">
                                    @php
                                    $postcontent = $section->contents->first();
                                    @endphp
                                    <div class="col-md-12">
                                        <img src="{{ asset('public/images').'/'. $postcontent->image }}" alt="">
                                        <h4><a href="{{ route('postcontent.single', $postcontent->id) }}">{{ $postcontent->title }}</a></h4>
                                        <p>{{ $postcontent->description }}</p>
                                    </div>
                                    <div class="col-md-12 side-top">
                                        <div class="row">
                                            @php $i = 2; @endphp

                                        @foreach ($section->contents->take(4) as $postcontent)

                                            @if ($i >= 2)
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
                                @endif

                            </div>
                        </div>
                    </div>
                 @endif
                 @php
                    $counter++
                 @endphp
                 @endforeach

            </div>

        </div>
    </div>
</div>
@endsection
