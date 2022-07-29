@php
    $packages = App\Models\Package::all(); 
@endphp

<div class="col-xl-12 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Package List</h6>
            </div>
            <div class="ms-panel-body">

              <div class="table-responsive">
                <table class="table thead-primary">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Package Name</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Customer Number</th>
                      <th scope="col">Customer Address</th>
                      <th scope="col">Delivery Email</th>
                      <th scope="col">Delivery Name</th>
                      <th scope="col">Delivery Number</th>
                      <th scope="col">Delivery Address</th>
                      <th scope="col">Delivery State</th>
                      <th scope="col">Delivery Country</th>
                      <th scope="col">Number of Package</th>
                      <th scope="col">Package Weight</th>
                      <th scope="col">Tracking Number</th>
                      <th scope="col">Delete Package</th>
                      
                
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($packages as $package )
                    <tr>
                      <th scope="row">{{$package->id}}</th>
                      <td>{{$package->packageName}}</td>
                      <td>{{$package->customerName}}</td>
                      <td>{{$package->customerNumber}}</td>
                      <td>{{$package->customerAddress}}</td>
                      <td>{{$package->deliveryEmail}}</td>
                      <td>{{$package->deliveryName}}</td>
                      <td>{{$package->deliveryNumber}}</td>
                      <td>{{$package->deliveryAddress}}</td>
                      <td>{{$package->deliveryState}}</td>
                      <td>{{$package->deliveryCountry}}</td>
                      <td>{{$package->packageNumber}}</td>
                      <td>{{$package->packageWeight}}</td>
                      <td>{{$package->trackNumber}}</td>
                      <td><a href="{{url('/adm/package/delete/' . $package->id )}}" class="btn btn-sm btn-danger"> delete </a> </td>
                      
                    </tr>
                      @endforeach
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>