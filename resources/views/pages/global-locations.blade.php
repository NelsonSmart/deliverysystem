@extends('inc.layout')

@section('content')

<!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{asset('assets/images/page-titles/13.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Global Locations</li>
                </ol>
              </nav>
              <h1 class="pagetitle__heading">Global Locations</h1>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ===========================
        locations
      ============================= -->
      <section id="locations" class="locations pb-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="locations-panel">
                <div class="locations__panel-header">
                  <h4 class="locations__panel-title">Africa</h4>
                </div><!-- /.locations-panel-header -->
                <ul class="list-unstyled">
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Alexandria</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Tanger</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>East Africa</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Togo</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Cairo (Airport Office)</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Antananarivo</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Matshapa</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Angola</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Casablanca</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Mauritius Airport Office</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Port Harcourt</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Luanda</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Port Said</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Port Louis</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Mahe</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Tanzania</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Nairobi</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Ghana</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Manica Malawi</span></a></li>
                </ul>
              </div><!-- /.locations-panel -->
              <div class="locations-panel">
                <div class="locations__panel-header">
                  <h4 class="locations__panel-title">Asia</h4>
                </div><!-- /.locations-panel-header -->
                <ul class="list-unstyled">
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Ahmedabad</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Chennai</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Kerteh</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Port Klang</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Bangalore</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Bangalore</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Kolkata</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Qingdao</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Bangkok</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Danang</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Kuala Lumpur</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Raigad Navi Mumbai</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Baroda</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Gandhidham</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Kuantan</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Semarang</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Beijing</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Ho Chi Minh</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Medan</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Seoul</span></a></li>
                </ul>
              </div><!-- /.locations-panel -->
              <div class="locations-panel">
                <div class="locations__panel-header">
                  <h4 class="locations__panel-title">Europe</h4>
                </div><!-- /.locations-panel-header -->
                <ul class="list-unstyled">
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Amsterdam</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Frankfurt</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Madrid</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Orey</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Ankara</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Gaziemir</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Malpensa</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Belarus</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Antwerp</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Hamburg</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Manchester</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Ukraine</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Barcelona</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Istanbul</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Marseille</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Portland</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Brussels</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Izmir</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Mersin</span></a></li>
                </ul>
              </div><!-- /.locations-panel -->
              <div class="locations-panel">
                <div class="locations__panel-header">
                  <h4 class="locations__panel-title">Middle East</h4>
                </div><!-- /.locations-panel-header -->
                <ul class="list-unstyled">
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Al-Kazemi</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Muscat</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Islamabad</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Sharjah</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Abu Dhabi</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Sharjah</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Kabul</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Beirut</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Doha</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Sohar</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Karachi</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Muscat</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Dammam</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Sohar Port</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Lahore</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Jeddah</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Bahrain</span></a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Riyadh</span></a></li>
                </ul>
              </div><!-- /.locations-panel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.locations -->

@endsection
