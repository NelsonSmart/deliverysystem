@extends('inc.layout')

@section('content')

<!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{asset('assets/images/page-titles/11.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Careers</li>
                </ol>
              </nav>
              <h1 class="pagetitle__heading">Work With Us</h1>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- =========================== 
        fancybox Layout2
      ============================= -->
      <section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
        <div class="container">
          <div class="row heading  mb-40">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <span class="heading__subtitle">Services We Offer</span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-5">
              <h2 class="heading__title">We Manage Lead Logistics For World’s Multinational Companies.</h2>
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
              <p class="heading__desc">Our global logistics expertise, advanced supply chain technology & customized
                logistics solutions will help you analyze, develop and implement successful supply chain management
                strategies.</p>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <!-- fancybox item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-credit-cards"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Transparent Pricing</h4>
                  <p class="fancybox__desc">The world of international supply chains involves a myriad of unknown risks
                    and challenging regulations.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-search-worldwide"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Real-Time Tracking</h4>
                  <p class="fancybox__desc">We ensure our customers’ supply chains are fully compliant by our
                    comprehensive practices and programs. </p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-boxes"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Warehouse Storage</h4>
                  <p class="fancybox__desc">Depending on your product, needs and requirements, we provide professional
                    warehouse activities.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #4 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-balance"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Security For Cargo</h4>
                  <p class="fancybox__desc">Our facilities meet high security requirements and are certified to the
                    highest local standards.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #5 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-target"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Easy Payment Methods</h4>
                  <p class="fancybox__desc">You can make use the easy convenient payment options, listed below, that are
                    available in your country.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #6 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-telephone-1"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">24/7 Hours Support</h4>
                  <p class="fancybox__desc">We enhance our logistics operations by relieving you of the worries associated
                    with freight forwarding.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #7 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-delivery-delay"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Fast & Efficient Delivery</h4>
                  <p class="fancybox__desc">We enhance our logistics operations by relieving you of the worries associated
                    with freight forwarding.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #8 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="fancybox-item fancybox-item-custom">
                <div class="fancybox__icon">
                  <i class="icon-stamp"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Awards & Milestones</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.fancybox Layout1 -->
  
      <!-- =========================
         video 1
        =========================== -->
      <section id="video1" class="video video-1 bg-overlay bg-parallax counters-white">
        <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/3.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
              <div class="heading">
                <span class="heading__subtitle color-white">Your Package, Your Rules</span>
                <h3 class="heading__title color-white">Digital Freight That
                  Saves Your Time!</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
              <div class="row">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                  <div class="counter-item">
                    <div class="counter__icon"><i class="icon-worldwide"></i></div>
                    <h4><span class="counter">1,538</span><span>m</span></h4>
                    <p class="counter__desc">Clients Worldwide</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                  <div class="counter-item">
                    <div class="counter__icon"><i class="icon-trolley"></i></div>
                    <h4><span class="counter">5,154</span><span>m</span></h4>
                    <p class="counter__desc">Delivered Goods</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                  <div class="counter-item">
                    <div class="counter__icon"><i class="icon-truck"></i></div>
                    <h4><span class="counter">8,845</span><span>m</span></h4>
                    <p class="counter__desc">Miles Driven</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.video 1 -->
  
      <!-- ========================= 
           careers
      =========================  -->
      <section id="careers" class="careers bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-50">
                <span class="heading__subtitle">Join Our Team</span>
                <h2 class="heading__title">Current Openings</h2>
                <div class="divider__line divider__center"></div>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="carousel owl-carousel" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true"
                data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">

                <p>No current Openning ... </p>
                <!-- job item #1 
                <div class=" job-item">
                  <div class="job__meta">
                    <span class="job__type">Full Time</span>
                    <span class="job__location">New York</span>
                  </div>
                  <h4 class="job__title">Chief Executive Officer</h4>
                  <p class="job__desc">A chief executive officer (CEO) is the highest-ranking executive in a company, and
                    their primary responsibilities include making major corporate decisions.</p>
                  <a href="#" class="btn btn__secondary btn__link btn__underlined">Apply Now</a>
                </div> /.job-item -->
  
              </div>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.careers -->
  
     
    
@endsection