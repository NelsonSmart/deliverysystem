@extends('inc.layout')
@section('content')

@php($settings = App\Models\Setting::find(1))

    <!-- ============================
        Slider
    ============================== -->
    <section id="slider1" class="slider slider-1">
        <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false"
          data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
          <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="{{asset('assets/images/sliders/1.jpg')}}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <div class="slide__content">
                    <h2 class="slide__title">Safe & Reliable Cargo Solutions!</h2>
                    <p class="slide__desc">Providing flexibile, improved service levels, and accelerated
                      delivery.</p>
                          <form action="{{route('trace')}}" method="GET">
                              <div class="form-group">
                                <label class="slide__title">Tracking Number</label>
                                <div class="form-group">
                                   <input type="text" class="form-control" name="trackNumber" placeholder="Enter Tracking Number" required>
                                 </div>
                              </div>
                              <center>
                  
                              <button class="btn btn__primary btn-sm" style="border-radius: 10px">Track & Trace</button>
                              </center>
                      </form>
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
          <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="{{ asset('assets/images/sliders/3.jpg')}}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <div class="slide__content">
                    <h2 class="slide__title">Fast, Certified & Felxible Solutions.</h2>
                    <p class="slide__desc">Providing flexibile, improved service levels, and accelerated delivery.</p>
                    <a href="#" class="btn btn__white mr-40">Get Started</a>
                    <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                      <div class="video__player">
                        <span class="video__player-animation"></span>
                        <i class="fa fa-play"></i>
                      </div>Our Video!
                    </a>
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
          <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="{{ asset('assets/images/sliders/2.jpg')}}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <div class="slide__content">
                    <h2 class="slide__title">Safe & Reliable Cargo Solutions!</h2>
                    <p class="slide__desc">Providing flexibile, improved service levels, and accelerated
                      delivery.</p>
                    <a href="#" class="btn btn__white mr-40">Our Services</a>
                    <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                      <div class="video__player">
                        <span class="video__player-animation"></span>
                        <i class="fa fa-play"></i>
                      </div>Our Video!
                    </a>
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
          <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="{{ asset('assets/images/sliders/5.jpg')}}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <div class="slide__content">
                    <h2 class="slide__title">Fast, Certified & Felxible Solutions.</h2>
                    <p class="slide__desc">Providing flexibile, improved service levels, and accelerated delivery.</p>
                    <a href="#" class="btn btn__white mr-40">Get Started</a>
                    <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                      <div class="video__player">
                        <span class="video__player-animation"></span>
                        <i class="fa fa-play"></i>
                      </div>Our Video!
                    </a>
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12  d-none d-lg-block">
              <div class="owl-thumbs thumbs-dots" data-slider-id="slider1">
                <button class="owl-thumb-item">
                  <i class="icon-elevator"></i>
                  <span>Warehousing <br> Services</span>
                </button>
                <button class="owl-thumb-item">
                  <i class="icon-airplane"></i>
                  <span>Air Freight<br> Services</span>
                </button>
                <button class="owl-thumb-item">
                  <i class="icon-ship"></i>
                  <span>Ocean Freight<br> Services</span>
                </button>
                <button class="owl-thumb-item">
                  <i class="icon-truck"></i>
                  <span>Road Freight<br> Services</span>
                </button>
              </div><!-- /.owl-thumbs -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.slider -->
  
      <!-- ========================
        About 4
      =========================== -->
      <section id="about4" class="about about-2 about-4 pb-40">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="row heading heading-2">
                <div class="col-sm-12 col-md-12 col-sm-12">
                  <h2 class="heading__title">Safe, Reliable And Express Logistic & Transport Solutions
                    That Saves Your Time!</h2>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-5 col-lg-5">
                  <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
                    data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                    data-speed="700">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-worldwide"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title">Our Mission</h4>
                        <p class="fancybox__desc">Utilising latest communications, tracking processing software, and
                          decades of experience.</p>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-transfer"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title">Our Vision</h4>
                        <p class="fancybox__desc">The best possible service in the sphere of optimized route of cargo &
                          transportation worldwide.</p>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-7 col-lg-7">
                  <p class="heading__desc mb-30">{{env('APP_NAME')}} Group is a representative logistics operator providing full range
                    of service in the sphere
                    of customs clearance and transport worldwide for any type of cargo.</p>
                  <p>We pride ourselves on providing the best transport and shipping services available allover the
                    world. Our skilled personnel, utilising the latest communications, tracking and processing software,
                    combined with decades of experience! Through integrated supply chain solutions, {{env('APP_NAME')}} drives
                    sustainable competitive advantages to some of Australia's largest companies.</p>
                  <img src="{{ asset('assets/images/about/singnture.png')}}" alt="singnture" class="signature mb-30">
                </div><!-- /.col-lg-7 -->
              </div><!-- /.row -->
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-9 col-lg-5">
              <div class="about__img mb-60">
                <img src="{{ asset('assets/images/about/2.jpg')}}" alt="about img" class="img-fluid">
                <span>More About Us!</span>
              </div><!-- /.about-img -->
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About 4 -->
  
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
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="counter-item">
                    <div class="counter__icon"><i class="icon-worldwide"></i></div>
                    <h4><span class="counter">1,538</span><span>m</span></h4>
                    <p class="counter__desc">Clients Worldwide</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="counter-item">
                    <div class="counter__icon"><i class="icon-trolley"></i></div>
                    <h4><span class="counter">5,154</span><span>m</span></h4>
                    <p class="counter__desc">Delivered Goods</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
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
  
      <!-- ========================
          Request Quote Tabs
      =========================== -->
      <section id="requestQuoteTabs" class="request-quote request-quote-tabs pt-0 bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="request__form">
                <nav class="nav nav-tabs">
                  
                  <a class="nav__link active" data-toggle="tab" href="#track">
                    <div class="request__form-header d-flex align-items-center">
                      <i class="icon-worldwide"></i>
                      <h4 class="request__form-title">Track & Trace</h4>
                    </div><!-- /.request-form-header -->
                  </a>
                </nav>
                <div class="tab-content">
                  
                  <div class="tab-pane fade show active" id="track">
                    <div class="request__form-body">
                      <form action="{{route('trace')}}" method="GET">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                          <div class="row">
  
                            
  
                            <div class="col-sm-12 col-md-12 col-lg-12">
                              <div class="form-group">
                                <label>Tracking Number</label>
                                <div class="form-group">
                                   <input type="text" class="form-control" name="trackNumber" placeholder="Enter Tracking Number" required>
                                 </div>
                              </div>
                            </div><!-- /.col-lg-12 -->
                            
                            <div class="col-sm-12 col-md-12 col-lg-12">
                              <button class="btn btn__secondary btn__block">Track & Trace</button>
                            </div><!-- /.col-lg-12 -->
                          </div>
                        </div><!-- /.col-lg-8 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                          <div class="widget widget-help bg-theme">
                            <div class="widget__content">
                              <h5>How Can <br> We Help You!</h5>
                              <p>We understand the importance approaching each work integrally and believe in the power of
                                simple
                                and easy communication.</p>
                              <a href="{{route('contact')}}" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact
                                Us</a>

                                
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
                        </div><!-- /.col-lg-4 -->
                      </div><!-- /.row -->
                    </form>
                    </div><!-- /.request-form-body -->
                  </div><!-- /.tab -->
                </div><!-- /.tab-content -->
              </div><!-- /.request-form -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Request Quote Tabs -->
  
      <!-- ========================
          Services
      =========================== -->
      <section id="services" class="services pt-0 bg-gray">
        <div class="container">
          <div class="row heading mb-40">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <span class="heading__subtitle">Services We Offer</span>
            </div><!-- /.col-lg-12 -->
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
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/services/1.jpg')}}" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__overlay">
                  <div class="service__icon"><i class="icon-airplane"></i></div>
                  <h4 class="service__title">Air Freight</h4>
                  <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                    transportation by air and all its related.</p>
                  <a href="#" class="btn btn__white btn__link btn__underlined">Read More</a>
                </div>
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/services/2.jpg')}}" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__overlay">
                  <div class="service__icon"><i class="icon-ship"></i></div>
                  <h4 class="service__title">Ocean Freight</h4>
                  <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                    transportation by air and all its related.</p>
                  <a href="#" class="btn btn__white btn__link btn__underlined">Read More</a>
                </div>
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/services/3.jpg')}}" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__overlay">
                  <div class="service__icon"><i class="icon-truck"></i></div>
                  <h4 class="service__title">Road Freight</h4>
                  <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                    transportation by air and all its related.</p>
                  <a href="#" class="btn btn__white btn__link btn__underlined">Read More</a>
                </div>
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <a href="{{route('request pickup')}}" class="btn btn__primary btn__hover3 btn__lg mt-20">Schedule An Appointment</a>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Services -->
  
      <!-- ===========================
        fancybox Layout2
      ============================= -->
      <section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 col-xl-4">
              <div class="heading heading-3 mb-50">
                <span class="heading__subtitle">Your Package, Your Rules</span>
                <h2 class="heading__title">We continue to pursue that same vision in today's complex, uncertain world,
                  working every day</h2>
              </div>
            </div><!-- /.col-xl-4 -->
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
      </section><!-- /.fancybox Layout2 -->
  
      <!-- =====================
         Clients 1
      ======================== -->
      <section id="clients1" class="clients clients-1 border-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
                data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
                <div class="client">
                  <a href="#"><img src="https://www.dhl.com/content/dam/dhl/global/core/images/logos/dhl-logo.svg" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="https://www.ups.com/assets/resources/images/UPS_logo.svg" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKzUspN8Hir2yZEl-J6QnaguYmKOYjhUp7Cd6E0tI&usqp=CAE&s" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="https://www.tnt.com/assets/images/tnt-logo@2x.png" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3CAMAAAAO5y+4AAAAbFBMVEX////ZLCfWAADzx8btqqjZKST77u3YHhfbPDjaMSzXEAX++fnZJyHxvLvYJB766en0zs399PTywcH55OT33t311dXvsbDgYmHojIribGrcQkDrnpzjdXPmhYPXFw/cSEXeUE3fWVbkfHrplZOJ8B7TAAAEUklEQVRoge2aa5eqLBiGC2VQRDTzVCaV/f//uLUmTeWozcta7/L+MB9m77oGeM6w223atGnTpk0rdYjSLMld182TLI0O/wUyOIZ1cfUZAABj3P5k/rWow2Pwp9C4vGGAKIH7QZBQBPCtjP8KnZYeQGTPF0HAK9M/oIY3gKAA+rtwBO7Jl6m5D0QrHa0a+PkXqYmP5Uv9WDT2v7Xm6KS11mHNp+gbWJcgA2onRNzV1J+L9hYPgvjysw6bnZkx9bnkc7YGGyK6CLvfUxQux7rAfI/fgmDxIVdgMbUTqKxgl4LdtdgWvGCrw/XYFmxsXJkiCegJIkN3+jkvdaCx6NksgFyWhYu50MUE6+IvYfd7bGBbEfnG4b4EiX52Og0ZiK22L3TSxSa9C0EvrCkwzYMTAd1CwB/SPL3vdnGNVaWVVMTXw+afRsWeuxTX3go01qu5/BGAlc9fHpzlaKi14GQSIHtHOCxetdYJ3ydFHMRO/28Hp/GwOZrc1dh0lg8g++wDOrSxcwF1J1HOvYbAcZANnMY3Q6NShQ08zvfR6+y/OQ0z2HDoqZq2mJt2GS/mOA3SNjMQK7icbX5+jr9Rca2JVm10cBO0JMKSxal9DTS5yTf6KEyATOiDgU5IwUcpV1xVEV9Sshzi5ixHKyqtWpx7qCdNpF00kzgXqqXcQlJWobvCGWTRjBbST15lnS7Xm6boml8qkKts3BT5UvMQeNNYbUiBeHZc0JedUqooI4Hm9MJpwNTMmCxEZ6omQRl3esU1HKGBrIKf5t6ZoPTPHiuIazLUZtIcnCubIoU3zdFaR6RRr6N79KPU8LdVb8eU1u86fQL1ZPI7ocf7Cx+9oa7mth1AJ0oRYgy/xBCBvuddb/fidGnqHvEYvk/K1ThfStrQ8mQUl+ZRVXmeOHGWpccoCKbx7PHxddLzVdozKlrAj+ak+xMrt2eV/ypDtBAr919FvJIH94kmYxmp4yviM3VVqlIBVh6f5fmo3Wc26HW9MFGfZafTIHk+kuVf8vSb530GQrQ16V+vKR+V64ZhnEVR1NfZ1dQhFUckrjfQrWnKyg2TJO6cpg1aB7GNuTM7UdQbwvqKnQwsmTPpU9RXonqSFeuwqnpSUD9Tk9XyBoyq+lnQL8BXvOdp/wrYoE8F3LmmsjHj90d7CGGXCtpc8GvUbzHYBurTpe5Hr/xxqrJO4fSDtK2VEH36TQsoW6POwySO04g3AuQPj9X94HyjWXHsUoHeAQtm1ur+d9bvmzmQwB00+v3d2KLZyeB6txKkFXLT+PAodNDLF1arOf7+yEnQSxxtCbF686vRvA7OU45QwtytOa/7nE9+Q7rzSXWVZSbteezn/Hm99OfP1ubttu4XrN2nWLs/snVfZu1+0Np9qLX7X2v33dbu9629Z7D2fsPae5Wdrfc5O2vvkXa23l91svPerJOd93Wd7Lwn7GTn/eQLbeO96FsW3sdu2rRp06b/t/4BkbdQZcZLf5gAAAAASUVORK5CYII=" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAATCAMAAACdgmL0AAAAbFBMVEX////AGBi+AAC8AAC9AAC7AAD57u7AFxfAFBTdnp6/CwvCKyvcm5vBIyPWg4O/Dw/8+PjBHh7MW1vhqanovr7x2dnTeHjNYGDPaWnKVVXtzs7YiorgpKT36OjQbm7IS0vjsrLFODjblJTFPz8BrKZrAAADSklEQVRIiZ1V6ZqqMAxNN1o6IGVEHVEcxPd/x5uTguB83uW7+VWynKYnC0R/l4NRKn6+tw23WrWt7d7Zvhul3PAPF/xG9lYpXb01Fc54Fa0r3hmdUiH+/7V0i0rZ/q3pqJmK07h/ZxOavv4EXKySXhWJj6kNSpmBz2njKG6pFlNKryD8xa6TBk34+omfo+nkzCLOcaWGx6JwB7LOMDajuyvdNo51AsmzqaTebGxnoqszGjbtLB22+CPRuB/RD3vmQ/kQBCPeKZmoZo1l7ODxFQLnUMcgAoUtqTOzyRzIBTllZ9fTTYcMoo/cHznMiwvfW1Z8O33xNd7WdY0EuW8rK4nqEOKZOl237B/auqFCf4iAd2VHuigxqVZLLZVu2jYCnFNULUrgQ80PPNY5Drbmgfd2aAgflDdg/IKClNIrSu+e1cc4mJeGBYAMiEwKTNLyCEmcgNdw6qC6bMOuOmvGcc9dOnC7N99SZ3646WmSe9cWZTaD28YDO/jF1OCAlme2t7O+Y5jXuT6aWSN9iLxUsCwoq8NMgiGzhPTPcSiOykHAqWjWSVEIiZrFL7N+X7ig8WGeceuk76Sss+g74DTI4iYVKZH3lQ+D4ZIDWsp7XYjDoXDIfQFxvZDCXLRCo2kkJTwra2jJK37OcpbL0hmpmSM92QeFqmHoHcs9zJqvxQTOwn0B+U4zTeaGvMHuicPE+7YWi/P6oB8CZ/aWJkLbMdJouOuFJXDp5oM372tJFVRoEqZHT9BMi+ZZvvllP8OULJGl7Rg7tx9MchpMnovM2WvL0+fMBeKFk2T9fBK5LiivcrTzMI18iMiLx8trfncno3qhzaSAs58bHLe4lHsPw5GQm1rnAqyrqFuR5kaT+uAxb/OSu+TN7/U0UMm3NB/Vl5Ft1W3Z7bOuzmIx2bJI4qmj5JDTbpK2iusDvV+WIvbinh7xuQqxd+gMf89bQsYraFlImdTnpEhRZE2yNBawXU6FCbvpvP0QlwstcjJ6Fb7Ibb7gtc8KQDkObrS2MPGbEluMTG+/CdJWVMmIG9h42MaHiE9t1i1I13KViYrp+XHNPdBVVd7jNOzu/rtiRVlWDNgvehxXmXKdCw4rJ/nt7c/qfjwUckGab/0F0Q8v/bNBZ94AAAAASUVORK5CYII=" alt="client"></a>
                </div><!-- /.client -->
              </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.clients 1 -->
  
      <!-- =========================
        Carousel Tabs
        =========================== -->
      <section id="carouselTabs" class="carousel-tabs pb-70">
        <div class="pricing-bg">
          <div class="bg-img bg-overlay"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav class="nav nav-tabs nav-tabs-white">
                <a class="nav__link active" data-toggle="tab" href="#tab1">ALL Works</a>
                <a class="nav__link" data-toggle="tab" href="#tab2">Distribution</a>
                <a class="nav__link" data-toggle="tab" href="#tab3">Warehousing</a>
                <a class="nav__link" data-toggle="tab" href="#tab4">Optimization</a>
                <a class="nav__link" data-toggle="tab" href="#tab5">Logistics</a>
                <a class="nav__link" data-toggle="tab" href="#tab6">Analystics</a>
              </nav>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1">
                  <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                    data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                    data-loop="true" data-speed="800">
                    <!-- project item #1 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/1.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #2 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/2.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #3 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/3.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Logistics</a><a href="#">Analytics</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                          spend by
                          utilizing an extensive .</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #4 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/4.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab-pane -->
                <div class="tab-pane fade" id="tab2">
                  <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                    data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                    data-loop="true" data-speed="800">
                    <!-- project item #1 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/5.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #2 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/6.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #3 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/1.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Logistics</a><a href="#">Analytics</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                          spend by
                          utilizing an extensive .</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #4 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/4.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab-pane -->
                <div class="tab-pane fade" id="tab3">
                  <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                    data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                    data-loop="true" data-speed="800">
                    <!-- project item #1 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/4.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #2 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/6.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #3 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/1.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Logistics</a><a href="#">Analytics</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                          spend by
                          utilizing an extensive .</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #4 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/2.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab-pane -->
                <div class="tab-pane fade" id="tab4">
                  <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                    data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                    data-loop="true" data-speed="800">
                    <!-- project item #1 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/5.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #2 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/6.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #3 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/1.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Logistics</a><a href="#">Analytics</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                          spend by
                          utilizing an extensive .</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #4 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/4.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab-pane -->
                <div class="tab-pane fade" id="tab5">
                  <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                    data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                    data-loop="true" data-speed="800">
                    <!-- project item #1 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/6.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #3 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/1.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Logistics</a><a href="#">Analytics</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                          spend by
                          utilizing an extensive .</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #4 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/4.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab-pane -->
                <div class="tab-pane fade" id="tab6">
                  <div class="projects-carousel-3 carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                    data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                    data-loop="true" data-speed="800">
                    <!-- project item #1 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/3.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <!-- project item #2 -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{asset('assets/images/case-studies/grid/6.jpg')}}" alt="project img">
                        <a href="#" class="zoom__icon"></a>
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Warehousing</a><a href="#">Distribution</a>
                        </div><!-- /.project-cat -->
                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                          and
                          optimizing your supply chain performance.</p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab-pane -->
              </div><!-- /.tab-content -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Carousel Tabs  -->
  
      <!-- =========================
              Testimonial #2
      =========================  -->
      <section id="testimonial2" class="testimonial testimonial-2 text-center pt-0 pb-170">
        <div class="bg-img"><img src="{{asset('assets/images/backgrounds/2.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center">
                <span class="heading__subtitle mb-0">Client’s Testimonials</span>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
              <div class="owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">
                <!-- Testimonial #1 -->
                <div class=" testimonial-item">
                  <div class="testimonial__content">
                    <p class="testimonial__desc">{{env('APP_NAME')}} team is the best of the best, and expertly trained team members
                      who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                      innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                      environment.</p>
                  </div><!-- /.testimonial-content -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class=" testimonial-item">
                  <div class="testimonial__content">
                    <p class="testimonial__desc">{{env('APP_NAME')}} offers its customers flexible payment and billing options for transport charges, duties and taxes.
                   This flexibility gives the freedom to invoice the Shipper, Receiver or a third party Importer. </p>
                  </div><!-- /.testimonial-content -->
                </div><!-- /. testimonial-item -->
              </div>
              <div class="owl-thumbs" data-slider-id="1">
                <button class="owl-thumb-item">
                  <span class="testimonial__meta">
                    <span class="testimonial__thumb">
                      <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                    </span><!-- /.testimonial-thumb -->
                    <span class="testimonial__meta-title">Sami Wade</span>
                    <span class="testimonial__meta-desc">WhiteMov</span>
                  </span><!-- /.testimonial-meta -->
                </button>
                <button class="owl-thumb-item">
                  <span class="testimonial__meta">
                    <span class="testimonial__thumb">
                      <img src="assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                    </span><!-- /.testimonial-thumb -->
                    <span class="testimonial__meta-title">John Peter</span>
                    <span class="testimonial__meta-desc">Mov Inc</span>
                  </span><!-- /.testimonial-meta -->
                </button>
              </div><!-- /.owl-thumbs -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonial2 -->
  
      
@endsection