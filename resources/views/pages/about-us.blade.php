@extends('inc.layout')
@section('content')

 <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{asset('assets/images/page-titles/14.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
              </nav>
              <h1 class="pagetitle__heading">About Us</h1>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- ========================
        About 2
      =========================== -->
      <section id="about2" class="about about-2 pb-30">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-5">
              <div class="about__img mb-60">
                <img src="{{ asset('assets/images/about/2.jpg')}}" alt="about img" class="img-fluid">
              </div><!-- /.about-img -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="row heading heading-2">
                <div class="col-sm-12 col-md-12 col-sm-12">
                  <h2 class="heading__title">Safe, Reliable And Express Logistic & Transport Solutions
                    That Saves Your
                    Time!</h2>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-7 col-lg-7">
                  <p class="heading__desc mb-30">{{env('APP_NAME')}} Group is a representative logistics operator providing full range
                    of service in the sphere
                    of customs clearance and transport worldwide for any type of cargo.</p>
                  <p>We pride ourselves on providing the best transport and shipping services available allover the
                    world. Our skilled personnel, utilising the latest communications, tracking and processing software,
                    combined with decades of experience! Through integrated supply chain solutions, {{env('APP_NAME')}} drives
                    sustainable competitive advantages to some of Australia's largest companies.</p>
                  <img src="{{asset('assets/images/about/singnture.png')}}" alt="singnture" class="signature mb-30">
                </div><!-- /.col-lg-7 -->
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
              </div><!-- /.row -->
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About 2 -->
  
      <!-- =====================
         Clients 1
      ======================== -->
      <section id="clients" class="clients clients-1 border-top">
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
  
      <!-- ======================
             banner 1
        ========================= -->
      <section id="banner1" class="banner banner-1 video fancybox-layout2 p-0 bg-theme">
        <div class="container-fluid col-padding-0">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 equal-height">
              <div class="inner-padding">
                <div class="heading heading-2 mb-50">
                  <h2 class="heading__title color-white">Logistic & Transport Solutions Saves Your Time!</h2>
                  <p class="heading__desc color-white">{{env('APP_NAME')}} Group is a representative logistics operator providing full
                    range of service in the sphere of customs clearance and transportation worldwide for any type of
                    cargo. </p>
                </div><!-- /.heading -->
                <div class="row">
                  <!-- fancybox item #1 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-credit-cards"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title">Transparent Pricing</h4>
                        <p class="fancybox__desc">The world of international supply chains involves a myriad of unknown
                          risks
                          and challenging regulations.</p>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-lg-3 -->
                  <!-- fancybox item #2 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
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
                </div><!-- /.row -->
                <a href="{{route('request pickup')}}" class="btn  btn__white btn__hover2 btn__lg">Schedule An Appointment</a>
              </div>
            </div><!-- /.col-lg-6 -->
            
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.banner 1 -->
  
      <!-- ========================= 
              Testimonial #2
      =========================  -->
      <section id="testimonial2" class="testimonial testimonial-2 text-center pb-170">
        <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/2.jpg')}}" alt="background"></div>
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
              <div class=" owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">
  
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
                   This flexibility gives the freedom to invoice the Shipper, Receiver or a third party Importer.</p>
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