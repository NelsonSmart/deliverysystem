@extends('admin.inc.layout')
@section('content')

<div class="ms-content-wrapper">
    <div class="row">

      <div class="col-xl-3 col-md-6">
        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
          <div class="ms-card-body media">
            <div class="media-body">
              <h6>Total Orders</h6>
              <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
              <p class="fs-12">48% From Last 24 Hours</p>
            </div>
          </div>
          <i class="flaticon-archive"></i>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
          <div class="ms-card-body media">
            <div class="media-body">
              <h6>Compeleted Orders</h6>
              <p class="ms-card-change"> $80,950</p>
              <p class="fs-12">2% Decreased from last day</p>
            </div>
          </div>
          <i class="flaticon-supermarket"></i>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
          <div class="ms-card-body media">
            <div class="media-body">
              <h6>Pending Orders</h6>
              <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
              <p class="fs-12">48% From Last 24 Hours</p>
            </div>
          </div>
          <i class="flaticon-reuse"></i>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
          <div class="ms-card-body pos media">
            <div class="media-body">
              <h6>Total Products</h6>
              <p class="ms-card-change "> $80,950</p>
              <p class="fs-12">2% Decreased from last week</p>
            </div>
          </div>
          <i class="fas fa-cannabis "></i>
        </div>
      </div>
      <div class="col-md-12 col-xl-6">
        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-header ms-panel-custom align-items-center">
            <h6>Orders Graph</h6>
            <ul class="nav nav-tabs d-flex nav-justified mb-0" role="tablist">
              <li><a href="#tab13" aria-controls="tab13" class=" pb-0" role="tab" data-toggle="tab" aria-selected="false"><i class="fas fa-chart-bar fa-2x "></i></a></li>
              <li><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab" class="active pb-0 show" aria-selected="true"><i class="fas fa-chart-line fa-2x "></i> </a></li>

            </ul>
          </div>
          <div class="ms-panel-body clearfix">

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in" id="tab13">
                <div class="ms-panel-body">
                  <canvas id="bar-chart"></canvas>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade active show" id="tab14">
                <div class="ms-panel-body">
                  <canvas id="line-chart"></canvas>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab15">

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-md-12">
        <div class="ms-panel ms-panel-fh ms-crypto-orders">
          <div class="ms-panel-header">
            <div class="d-flex justify-content-between">
              <div class="ms-header-text">
                <h6>Current Sales</h6>
                <p>Manage your current sale and buy orders</p>
              </div>
              <ul class="btn-group btn-group-toggle nav nav-tabs ms-graph-metrics" role="tablist">
                <li role="presentation"><a href="#b-orders" aria-controls="b-orders" class="btn btn-sm active show" role="tab" data-toggle="tab" aria-selected="true"> Buy Orders </a></li>
                <li role="presentation"><a href="#s-orders" aria-controls="s-orders" class="btn btn-sm" role="tab" data-toggle="tab" aria-selected="false"> Sell Orders </a></li>
              </ul>
            </div>
          </div>
          <div class="ms-panel-body p-0">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active show" id="b-orders">
                <div class="table-responsive">
                  <table class="table table-hover thead-light">
                    <thead>
                      <tr>
                        <th scope="col">Price ($)</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Track ID</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>$7860.24</td>
                        <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$5813.44</td>
                        <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$1264.99</td>
                        <td><i class="fas fa-dollar-sign BTC"></i> 0.117</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$3789.31</td>
                        <td><i class="fas fa-euro-sign PPC-alt"></i>0.217</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$7860.24</td>
                        <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$7860.24</td>
                        <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$7860.24</td>
                        <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$5813.44</td>
                        <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="s-orders">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Price ($)</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Track ID</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>$7860.24</td>
                        <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$5813.44</td>
                        <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$1264.99</td>
                        <td><i class="fas fa-dollar-sign BTC"></i> 0.117</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$3789.31</td>
                        <td><i class="fas fa-euro-sign PPC-alt"></i>0.217</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$7860.24</td>
                        <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$7860.24</td>
                        <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$7860.24</td>
                        <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                      <tr>
                        <td>$5813.44</td>
                        <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                        <td>#TR34351</td>
                        <td>12.01.2020</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-12 col-md-12">
        <div class="ms-panel">
          <div class="ms-panel-header ms-panel-custom ">

            <div class="ms-heading">
              <h6>Top Sallers Products</h6>
              <p>Lorem Ipsum is simply dummy text of the printing</p>
            </div>
          </div>
          <div class="ms-panel-body">
            <div class="table-responsive">
              <table class="table table-hover thead-primary">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Avalability</th>
                    <th>Last Purchase</th>
                    <th>Ratings</th>
                    <th>Price</th>
                    <th>Total Orders</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="ms-table-f-w"> <img src="admin/assets/img/dashboard/product-1.jpg" alt="people"> <a href="#">White Widow </a></td>
                    <td><span class="badge badge-success">In Stock</span></td>
                    <td>26-10-2020</td>
                    <td>
                      <ul class="ms-star-rating rating-fill mb-0 rating-circle heart-rating">
                        <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                      </ul>
                    </td>
                    <td>$450.50</td>
                    <td>752</td>
                  </tr>
                  <tr>
                    <td class="ms-table-f-w"> <img src="admin/assets/img/dashboard/product-2.jpg" alt="people"> <a href="#">Super Sunk </a></td>
                    <td><span class="badge badge-success">In Stock</span></td>
                    <td>27-10-2020</td>
                    <td>
                      <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                        <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                      </ul>
                    </td>
                    <td>$350.50</td>
                    <td>365</td>
                  </tr>
                  <tr>
                    <td class="ms-table-f-w"> <img src="admin/assets/img/dashboard/product-3.jpg" alt="people"><a href="#">Low Rider</a></td>
                    <td><span class="badge badge-danger">Out Of Stock</span></td>
                    <td>28-10-2020</td>
                    <td>
                      <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                        <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                        <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                      </ul>
                    </td>
                    <td>$550.50</td>
                    <td>165</td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
    
@endsection