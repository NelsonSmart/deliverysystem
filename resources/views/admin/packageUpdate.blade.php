@extends('admin.inc.layout')
@section('content')

  <div class="ms-content-wrapper">
      <div class="row">

        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>

              <li class="breadcrumb-item active" aria-current="page">Shipment List</li>
            </ol>
          </nav>
        </div>
        <div class="col-xl-12 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Active Package</h6>
            </div>
            <div class="ms-panel-body">

              <div class="table-responsive">
                <table class="table thead-primary">
                  <thead>
                    <tr>
                      
                      <th scope="col">Package Name</th>
                      <th scope="col">Delivery Email</th>
                      <th scope="col">Delivery Name</th>
                      <th scope="col">Delivery State</th>
                      <th scope="col">Delivery Country</th>
                      <th scope="col">Number of Package</th>
                      <th scope="col">Package Weight</th>
                      <th scope="col">Package Status</th>
                      <th scope="col">Tracking Number</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                       @foreach ($packages as $package )
                    <tr>
                      
                      <td>{{$package->packageName}}</td>
                      <td>{{$package->deliveryEmail}}</td>
                      <td>{{$package->deliveryName}}</td>
                      <td>{{$package->deliveryState}}</td>
                      <td>{{$package->deliveryCountry}}</td>
                      <td>{{$package->packageNumber}}</td>
                      <td>{{$package->packageWeight}}</td>
                      <td>{{$package->status}}</td>
                      <td>{{$package->trackNumber}}</td>
                      <td> <a href="{{url('adm/package/update/'.$package->id)}}" class="ms-text-primary"> View Details</a></td>
                    </tr>
                      @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
@endsection