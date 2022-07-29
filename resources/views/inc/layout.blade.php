<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Logisti ">
  <link href="{{ asset('assets/images/favicon/favicon.png')}}" rel="icon">
  <title>{{Route::current()->getName()}} - {{env('APP_NAME')}}</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&amp;display=swap">
  <link rel="stylesheet" href="{{ asset('assets/css/libraries.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
  @if ( Route::current()->getName() == 'trace')
    <link rel="stylesheet" type="text/css" href="{{asset('KExpress_files/bootstrap.css')}}" media="all">
      <link rel="stylesheet" type="text/css" href="{{ asset('KExpress_files/track.css')}}" media="all">
      <link rel="stylesheet" type="text/css" href="{{asset('KExpress_files/footer.css')}}" media="all">
      <link href="{{ asset('KExpress_files/css.css')}}" rel="stylesheet">
      <link href="{{ asset('admin/vendors/iconic-fonts/font-awesome/css/all.min.css')}}" rel="stylesheet">
  
      <script src="{{ asset('KExpress_files/moment.js')}}"></script>
  @endif
</head>

<body>
  @php($settings = App\Models\Setting::find(1))
  {{-- <div class="preloader">
    <div class="loading"><span></span><span></span><span></span><span></span></div>
  </div><!-- /.preloader --> --}}

  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    @if ( Route::current()->getName() != 'trace')
      @include('inc.header')
    @endif
    

    @yield('content')



    <!-- =========================
            Google Map
    =========================  -->
    {{-- @include('inc.map') --}}

    <!-- ========================
      Footer
    ========================== -->
    @include('inc.footer')
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

    <div class="module__search-container">
        <i class="fa fa-times close-search"></i>
        <form class="module__search-form">
          <input type="text" class="search__input" placeholder="Search Here">
          <button class="module__search-btn"><i class="fa fa-search"></i></button>
        </form>
      </div><!-- /.module-search-container -->

  </div><!-- /.wrapper -->

  <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/logisti/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 11:13:13 GMT -->
</html>