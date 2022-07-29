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

       <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">

            @foreach ($errors->all() as $error )

            {{$error}}
                
            @endforeach

            @if (session('succ'))
            <div class="alert alert-success" >
            {{session('succ')}}

            </div>
                
            @endif

            <div class="ms-panel-body">
              <form action="{{route('submitPackage')}}" method="POST" class="needs-validation clearfix">
                  @csrf

                  <input type="text" name="status" value="created" hidden>
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                    <label for="package">Package Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="package" name="packageName" placeholder="Package Name" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 ">
                    <label for="cusEmail">Customer Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="cusName" name="customerName" placeholder="Customer Name" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 ">
                    <label for="cusAddr">Customer Address</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="cusAddr" name="customerAddress" placeholder="Customer Address" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xl-12 col-md-12 ">
                    <label for="cusNum">Customer Number</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="cusNum" name="customerNumber" placeholder="Customer Number" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 ">
                    <label for="dveryEmail">Delivery Email</label>
                    <div class="input-group">
                      <input type="email" class="form-control" id="dveryEmail" name="deliveryEmail" placeholder="Delivery Email" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 ">
                    <label for="dveryEmail">Delivery Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="dveryName" name="deliveryName" placeholder="Delivery Name" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 ">
                    <label for="dveryAddr">Delivery Address</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="dveryAddr" name="deliveryAddress" placeholder="Delivery Address" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xl-12 col-md-12 ">
                    <label for="dveryNum">Delivery Number</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="dveryNum" name="deliveryNumber" placeholder="Delivery Number" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xl-12 col-md-12 ">
                    <label for="dveryCoun">Delivery Country</label>
                    <div class="input-group">
                      {{-- <input type="text" class="form-control" id="dveryCoun" name="deliveryCountry" placeholder="Delivery Country" required>
                      <div class="invalid-feedback">
                        Name
                      </div> --}}

                      <select id="dveryCoun" class="form-control" name="deliveryCountry" >
                          <?php 
                              $country = App\Models\Country::orderby('name', 'asc')->get();
                             
                          ?>
                          @foreach($country as $c)
                                   
                            <option value="{{$c->id}}">{{$c->name}}</option>
                                
                          @endforeach
                          

                      </select>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 ">
                    <label for="dverySta">Delivery State</label>
                    {{-- <div class="input-group">
                      <input type="text" class="form-control" id="dverySta" name="deliveryState" placeholder="Delivery State" required>
                      <div class="invalid-feedback">
                        Name
                      </div> --}}

                      <select  id="dverySta" class="form-control" name="deliveryState" required>
                       
                              <?php 
                                $st = App\Models\state::orderby('name', 'asc')->get();
                            ?>
                            @foreach ( $st as $s )
                            <option value="{{$s->name}}">{{$s->name}}</option>
                            @endforeach()
                                
                           
                                                                                    
                    </select>      
                    </div>
                  </div>
                  
  
                  <div class="col-xl-12 col-md-12 ">
                    <label for="packNum">Number of Package</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="packNum" name="packageNumber" placeholder="Enter number of package" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div><div class="col-xl-12 col-md-12 ">
                    <label for="packWei">Package Weight</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="packWei" name="packageWeight" placeholder="Enter weight of package" required>
                      <div class="invalid-feedback">
                        Name
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-md-12">

                    <button class="btn btn-green mx-4  ms-graph-metrics" type="submit">Create</button>
                    
                  </div>

                </div>


              </form>
            </div>
          </div>
        </div>

        @include('admin.packageTable')
      
      </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    

        $(document).ready(function(){
            $('select[name="deliveryCountry"]').on('change', function() {
                var countryID = $(this).val();
                    if(countryID) {
                    $.ajax({
                        url: '/country/'+ countryID + '/states/',
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                        $('select[name="deliveryState"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="deliveryState"]').append('<option value="'+ value['name'] +'">'+ value['name'] +'</option>');
                            });
                        }
                    });
                    }else{
                    $('select[name="deliveryState"]').empty();
                      }
                  });
                });
    </script>
    
@endsection