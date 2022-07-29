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
        <div class="col-md-12">
            <div class="my-2">
                <a href="{{route('updatePackage')}}" class="btn btn-sm btn-primary rounded">back</a>
                @if($package->status != 'shipped')
                <form action="{{route('shipped')}}" method="POST">
                  @csrf
                  <input type="text" name="id" value="{{$package->id}}" id="" hidden>
                  <input type="text" name="status" value="shipped" id="" hidden>
                  
                  <button class="btn btn-sm btn-info rounded" type="submit">Shipped <input type="checkbox" name="" value="" @if($package->status == 'shipped' || $package->status == 'delivered' ) checked @endif readonly> </button> 
                  
                </form>
                @endif

                @if($package->status != 'delivered')
                <form action="{{route('delivered')}}" method="POST">
                  @csrf

                  <input type="text" name="id" value="{{$package->id}}" id="" hidden>
                  <input type="text" name="status" value="delivered" id="" hidden>

                  <button class="btn btn-sm btn-success rounded" type="submit">Delivered <input type="checkbox" name="" value="" @if($package->status == 'delivered') checked @endif> </button> 
                </form>
                @endif
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Update Package Location</h6>
              <br>
              <h6>Package Number: {{$package->trackNumber}}</h6>
            </div>
            <div class="ms-panel-body">
                  <form action="{{route('location')}}" method="POST" class="needs-validation clearfix">
                  @csrf
                  <input type="text" name="package_id" value="{{$package->id}}" id="" hidden>
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                    <label for="package">Package Current Location</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="package" name="currentLocation" placeholder="Package Location" @if($package->status == 'delivered') readonly @endif  required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
   
             
                  <div class="col-md-12">

                    <button class="btn btn-green mx-4  ms-graph-metrics" type="submit">Update</button>
                    
                  </div>

                </div>


              </form>
            </div>

            @php
                $locations = $package->locations;
            @endphp

            <div class="track-banners">
                <div class="col-md-6 track-details">
                    <div id="order-detail">
                             
                            <ul id="order-tree" style="width: 90%;">
                                @foreach ($locations as $location)
                                <li class="active">
                                        <span ><i class="fas fa-truck"></i></span>
                                        <b>{{$location->currentLocation}} </b>
                                        <p>{{$location->updated_at}}</p>
                                    </li>
                                    
                                @endforeach
                                
                                    
                                
                            </ul>
                            
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  
    
@endsection