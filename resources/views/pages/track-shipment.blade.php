@extends('inc.layout')

@section('content')

@php($settings = App\Models\Setting::find(1))
    <!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{asset('assets/images/page-titles/4.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Features</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Track & Trace</li>
                </ol>
              </nav>
              <h1 class="pagetitle__heading">Track & Trace</h1>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ======================
         Track Shipmeent
      ========================= -->
      <section id="trackShipmeent" class="track-shipmeent">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
              <aside class="sidebar sidebar-layout2 mb-30">
                <div class="widget widget-categories widget-categories-2">
                  <div class="widget-content">
                    <ul class="list-unstyled">
                      <li><a href="#Warehousing">Warehousing</a></li>
                      <li><a href="#AirFreight" class="active">Air Freight</a></li>
                      <li><a href="#OceanFreight">Ocean Freight</a></li>
                      <li><a href="#RoadFreight">Road Freight</a></li>
                      <li><a href="#SupplyChain">Supply Chain</a></li>
                      <li><a href="#Packaging">Packaging</a></li>
                    </ul>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-categories -->
                 <div class="widget widget-help bg-theme">
                  <div class="widget__content">
                    <h5>How Can <br> We Help You!</h5>
                    <p>We understand the importance approaching each work integrally and believe in the power of simple
                      and easy communication.</p>
                    <a href="{{ route('contact')}}" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact Us</a>
                      
                      <div class="p-4 mb-3 ">
                        <p class="mb-0 font-weight-bold" style="font-size:13px;">Address</p>
                        <p class="mb-4">Head Office: <i>10 Queens ave, San Anthonio way, London.</i></p>

                        <p class="mb-0 font-weight-bold" style="font-size:13px;">Phone</p>
                        <p class="mb-4">{{$settings->phoneNumber}}</p>

                        <p class="mb-0 font-weight-bold" style="font-size:13px;">Email Address</p>
                        <p class="mb-0">{{env('MAIL_FROM_ADDRESS')}}</p>

                      </div>

                  
                  </div><!-- /.widget-download -->
                </div><!-- /.widget-help -->
              </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            
            <div class="col-sm-12 col-md-12 col-lg-8">
              <form action="{{route('trace')}}" method="GET" class="request-quote-form">
                <div class="row mb-30">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="fz-16 mb-45">Need dependable, cost effective transportation of your commodities? Fill out
                      our easy
                      Quote Request Form below to get a fast quote on your job.</p>
                  </div><!-- /.col-lg-12 -->
                 
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    @foreach ($errors->all() as $error )

                      <p class="text-danger">
                        {{$error}}

                      </p>
                        
                      @endforeach
                    <div class="form-group">
                      <label>Tracking Number</label>
                      <div class="form-group">
                        <input type="text" class="form-control" name="trackNumber" placeholder="Enter Tracking Number">
                      </div>
                    </div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary btn__block">Track & Trace</button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Track Shipmeent -->

@endsection
