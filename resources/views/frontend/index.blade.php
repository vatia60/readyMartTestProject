@extends('frontend.layouts.master')
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-one">
                  <h2>Section One</h2>
                  <div class="row">
                      <div class="col-md-6">
                          <img src="{{ asset('public/images/video.png') }}" alt="">
                          <h4>Title</h4>
                      </div>
                      <div class="col-md-6">
                          <div class="row">
                              <div class="col-md-6">
                                <img src="{{ asset('public/images/video.png') }}" alt="">
                                <h6>Title</h6>
                              </div>
                              <div class="col-md-6">
                                <img src="{{ asset('public/images/video.png') }}" alt="">
                                <h6>Title</h6>
                              </div>
                              <div class="col-md-6">
                                <img src="{{ asset('public/images/video.png') }}" alt="">
                                <h6>Title</h6>
                              </div>
                              <div class="col-md-6">
                                <img src="{{ asset('public/images/video.png') }}" alt="">
                                <h6>Title</h6>
                              </div>
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
                    <div class="col-md-12">
                        <img src="{{ asset('public/images/video.png') }}" alt="">
                        <h4>Title</h4>
                    </div>
                    <div class="col-md-12 side-top">
                        <div class="row">
                            <div class="col-md-6">
                              <img src="{{ asset('public/images/video.png') }}" alt="">
                              <h6>Title</h6>
                            </div>
                            <div class="col-md-6">
                              <img src="{{ asset('public/images/video.png') }}" alt="">
                              <h6>Title</h6>
                            </div>
                            <div class="col-md-6">
                              <img src="{{ asset('public/images/video.png') }}" alt="">
                              <h6>Title</h6>
                            </div>
                            <div class="col-md-6">
                              <img src="{{ asset('public/images/video.png') }}" alt="">
                              <h6>Title</h6>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
