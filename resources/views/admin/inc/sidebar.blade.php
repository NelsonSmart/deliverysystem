 <!-- Sidebar Navigation Left -->
 <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="{{ route('createPackage')}}"> <img src="{{ asset('assets/images/logo/logo-dark.png')}}" width="134px" height="43px" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard 
      <li class="menu-item">
        <a href="#">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
      </li>
       /Dashboard -->
      
      <!-- Product Page Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product-page" aria-expanded="false" aria-controls="product-page">
            <span><i class="fas fa-truck"></i>Shipment</span>
        </a>
        <ul id="product-page" class="collapse" aria-labelledby="product-page" data-parent="#side-nav-accordion">
          <li> <a href="{{ route('createPackage')}}">Create Package</a> </li>
          <li> <a href="{{ route('updatePackage')}}">Update Location</a> </li>


        </ul>
      </li>
      <!-- /Product page -->
      <!---Customer Page Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer">
          <span><i class="fas fa-users"></i>Customers</span>
        </a>
        <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li> <a href="#">Customers-list</a> </li>
          
        </ul>
      </li>
      <!-- /Customer page -->
      <!-- Invoice -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#invoice" aria-expanded="false" aria-controls="invoice">
          <span><i class="fas fa-receipt"></i>Invoice</span>
        </a>
        <ul id="invoice" class="collapse" aria-labelledby="invoice" data-parent="#side-nav-accordion">
          <li> <a href="#">Invoice</a> </li>
          <li> <a href="#">Invoice-List</a> </li>



        </ul>
      </li>
      <!-- /Invoice -->

      <!-- Order Page Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#order-page" aria-expanded="false" aria-controls="order-page">
          <span><i class="fas fa-clipboard-list"></i>Order</span>
        </a>
        <ul id="order-page" class="collapse" aria-labelledby="order-page" data-parent="#side-nav-accordion">
          <li> <a href="#">Order Status</a> </li>

        </ul>
      </li>
      <!-- /order page -->

      <!-- Setting -->
      @if (auth()->user()->isAdmin == true)
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#setting" aria-expanded="false" aria-controls="setting">
          <span><i class="fas fa-boxes"></i>Settings</span>
        </a>
        <ul id="setting" class="collapse" aria-labelledby="setting" data-parent="#side-nav-accordion">
          <li> <a href="{{route('addUser')}}">Add Workers</a></li>
          <li> <a href="{{route('setting')}}">Settings</a></li>

        </ul>
      </li>
      @endif
      <!-- /Setting -->

      <!-- logout -->

      <li class="menu-item">

        <form action="{{route('logout')}}" method="post">
          @csrf
          <button class="btn btn-sm rounded mx-5" type="submit">
            <span><i class="flaticon-shut-down mr-2"></i> Logout</span>
          </button>
        
        </form>
        
      </li>

      <!-- /logout -->
      
    </ul>


  </aside>

  <!-- Sidebar Right -->
  <!--
    <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">

    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>
        <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-toggle="tab"> Settings </a></li>
        <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>

    <div class="ms-aside-body">

      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2020</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2020</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2020</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="recentPosts">

          <h6>General Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Location Tracking</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Notifications</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Popups</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Log Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Advanced Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

        </div>

      </div>

    </div>

  </aside>

  -->