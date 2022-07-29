@extends('inc.layout')
@section('content')

<!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{asset('assets/images/page-titles/6.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Features</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Request A Quote</li>
                </ol>
              </nav>
              <h1 class="pagetitle__heading">Request A Quote</h1>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ======================
         Request Quote
      ========================= -->
      <section id="requestQuote" class="request-quote">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
              <aside class="sidebar sidebar-layout2 mb-30">
                
                <div class="widget widget-help bg-theme">
                  <div class="widget__content">
                    <h5>How Can <br> We Help You!</h5>
                    <p>We understand the importance approaching each work integrally and believe in the power of simple
                      and easy communication.</p>
                    <a href="#" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact Us</a>

                  

                      <div class="p-4 mb-3 ">
                        <p class="mb-0 font-weight-bold" style="font-size:13px;">Address</p>
                        <p class="mb-4">Head Office: <i>10 Queens ave, San Anthonio way, London.</i></p>

                        <p class="mb-0 font-weight-bold" style="font-size:13px;">Phone</p>
                        <p class="mb-4">(+44)759 768 0092</p>

                        <p class="mb-0 font-weight-bold" style="font-size:13px;">Email Address</p>
                        <p class="mb-0">{{env('MAIL_FROM_ADDRESS')}}</p>

                      </div>


                  </div><!-- /.widget-download -->
                </div><!-- /.widget-help -->
              </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
              <form class="request-quote-form">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="alert alert-primary text-center mb-45">
                      Your form has been successfully submitted.
                    </div>
                    <p class="fz-16 mb-45">Need dependable, cost effective transportation of your commodities? Fill out
                      our easy Quote Request Form below to get a fast quote on your job.</p>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row mb-30">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h5 class="form__title">Personal Data</h5>
                    <div class="divider__line divider__theme divider__sm mb-30"></div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Company">
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="tel" class="form-control" placeholder="Phone">
                    </div>
                  </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <div class="row mb-30">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h5 class="form__title">Pickup Address </h5>
                    <div class="divider__line divider__theme divider__sm mb-30"></div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Street">
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Country">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="City">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Zip">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                    <div class="form-group input-radio mr-30">
                      <label class="label-radio">Lift Gate at Pickup Point
                        <input type="radio" name="radioGroup1" checked>
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                    <div class="form-group input-radio">
                      <label class="label-radio">Limited Access Pick Up
                        <input type="radio" name="radioGroup1">
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row mb-30">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h5 class="form__title">Drop-Off Address</h5>
                    <div class="divider__line divider__theme divider__sm mb-30"></div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Street">
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Country">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="City">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Zip">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                    <div class="form-group input-radio mr-30">
                      <label class="label-radio">Call before Delivery
                        <input type="radio" name="radioGroup2" checked>
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                    <div class="form-group input-radio mr-30">
                      <label class="label-radio">Lift Gate at Pickup Point
                        <input type="radio" name="radioGroup2">
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                    <div class="form-group input-radio mr-30">
                      <label class="label-radio">Limited Access Pick Up
                        <input type="radio" name="radioGroup2">
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                    <div class="form-group input-radio">
                      <label class="label-radio">Hazmat
                        <input type="radio" name="radioGroup2">
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row mb-10">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h5 class="form__title">Item To Be Shipped</h5>
                    <div class="divider__line divider__theme divider__sm mb-30"></div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group form-group-select">
                      <select class="form-control">
                        <option>Packaging</option>
                        <option>Packaging 1</option>
                        <option>Packaging 2</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Total Weight, lbs">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="QTY">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Length">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Width">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Height">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap flex-wrap">
                    <div class="form-group input-radio mr-30">
                      <label class="label-radio">Stackable
                        <input type="radio" name="radioGroup3" checked>
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                    <div class="form-group input-radio">
                      <label class="label-radio">Non-Stackable
                        <input type="radio" name="radioGroup3">
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary btn__block">Request A Quote</button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Request Quote -->


@endsection
