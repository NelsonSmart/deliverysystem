@extends('inc.layout')
@section('content')

<!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/5.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Why Choose Us!</li>
                </ol>
              </nav>
              <h1 class="pagetitle__heading">Why Choose Us!</h1>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ========================
        About 1
      =========================== -->
      <section id="about1" class="about about-1 pb-50">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="heading heading-2">
                <h2 class="heading__title">Logistic & Transport Solutions Saves Your Time!</h2>
                <p class="heading__desc mb-30">Logisti Group is a representative logistics operator providing full range
                  of service in the sphere of
                  customs clearance and transportation worldwide for any type of cargo.</p>
                <p>We pride ourselves on providing the best transport and shipping services available allover the world.
                  Our skilled personnel, utilising the latest communications, tracking and processing software, combined
                  with decades of experience! Through integrated supply chain solutions, Logisti drives sustainable
                  competitive advantages to some of Australia's largest companies.</p>
                <img src="assets/images/about/singnture.png" alt="singnture" class="signature">
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-10 col-lg-6">
              <div class="about__img text-right">
                <img src="assets/images/about/1.jpg" alt="about img" class="img-fluid">
              </div><!-- /.about-img -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About 1 -->

      <!-- ===========================
        fancybox Layout2
      ============================= -->
      <section id="fancyboxLayout2" class="fancybox-layout2 pt-0 pb-80">
        <div class="container">
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
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.fancybox Layout2 -->

      <!-- ===========================
        projects Carousel
      ============================= -->
      <section id="projectsCarousel" class="projects projects-carousel pt-130 pb-0">
        <div class="projects-bg">
          <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-50">
                <span class="heading__subtitle color-white">Latest Case Studies</span>
                <h2 class="heading__title color-white">Featured Projects</h2>
                <div class="divider__line divider__white divider__center mb-0"></div>
              </div><!-- /.heading -->
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
                  <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                    data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                    data-speed="700">
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/1.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/2.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/1.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing
                            and
                            optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab -->
                <div class="tab-pane fade" id="tab2">
                  <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                    data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                    data-speed="700">
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/6.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/4.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/2.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing
                            and
                            optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab -->
                <div class="tab-pane fade" id="tab3">
                  <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                    data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                    data-speed="700">
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/3.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/4.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/5.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing
                            and
                            optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab -->
                <div class="tab-pane fade" id="tab4">
                  <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                    data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                    data-speed="700">
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/6.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/3.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/2.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing
                            and
                            optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab -->
                <div class="tab-pane fade" id="tab5">
                  <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                    data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                    data-speed="700">
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/5.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/2.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/6.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing
                            and
                            optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab -->
                <div class="tab-pane fade" id="tab6">
                  <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                    data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                    data-speed="700">
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/6.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/3.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing and optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    <div class="project-item">
                      <div class="project__img">
                        <img src="assets/images/case-studies/carousel/2.jpg" alt="project img" class="img-fluid">
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                        <div class="project__content-inner">
                          <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                          <p class="project__desc">We understand that data is the greatest asset when it comes to
                            analyzing
                            and
                            optimizing your supply chain performance.</p>
                          <a href="#" class="btn btn__primary btn__link">Read More</a>
                        </div><!-- /.project-content-inner -->
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.tab -->
              </div><!-- /.tab-content -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.projects Carousel -->


      <!-- =========================
              Testimonial #1
      =========================  -->
      <section id="testimonial1" class="testimonial testimonial-1 pt-110 pb-130">
        <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="carousel owl-carousel" data-slide="2" data-slide-md="2" data-slide-sm="1" data-autoplay="true"
                data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                <!-- Testimonial #1 -->
                <div class=" testimonial-item">
                  <div class="testimonial__content">
                    <div class="testimonial__thumb">
                      <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                    </div><!-- /.testimonial-thumb -->
                    <div class="testimonial__rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                    <p class="testimonial__desc">“Logisti expertly trained team members who take the extra step and go the
                      extra mile, all to fulfill our dedicated promise deliver innovative and solutions to our
                      customers!”</p>
                  </div><!-- /.testimonial-content -->
                  <div class="testimonial__meta">
                    <h5 class="testimonial__meta-title">John Peter</h5>
                    <p class="testimonial__meta-desc">John Peter</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class=" testimonial-item">
                  <div class="testimonial__content">
                    <div class="testimonial__thumb">
                      <img src="assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                    </div><!-- /.testimonial-thumb -->
                    <div class="testimonial__rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                    <p class="testimonial__desc">“In my career, I’ve seen great companies serving logistics. But not to
                      the point where you feel that comfort and trust that we get with Logisti Company In.”</p>
                  </div><!-- /.testimonial-content -->
                  <div class="testimonial__meta">
                    <h5 class="testimonial__meta-title">Martin Hope</h5>
                    <p class="testimonial__meta-desc">ProMov</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
              </div>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonial1 -->


      

@endsection
