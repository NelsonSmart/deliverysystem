@extends('inc.layout')

@section('content')

<div class="contain">
        <div class="container-fluid nav-index">
            <div class="nav-body">
                <img class="kexpress-img" id="kexpress-nav-img" width="134px" height="43px" src="{{ asset('assets/images/logo/logo-dark.png')}}">
                <div class="nav-links">
                    <a class="nav-tag" href="{{route('home')}}">Home</a>
                    <a class="nav-tag" href="{{route('contact')}}">Contact Us</a>
                </div>
            </div>
            <div class="search-area">
                <div class="search">
                    <form action="{{route('trace')}}" method="GET" id="track-form">
                        <input type="text" id="trk-bars" name="trackNumber" class="search-bar" placeholder="Enter tracking details">
                        <input type="submit" id="trk-btn" class="trk" value="Track">
                    </form>
                </div>
            </div>
        </div>

        @php

        $status = $package->status;
        $packageId = $package->trackNumber;
        $locations = $package->locations ;

        @endphp
        <div class="container-fluid main-wrapper">
            
            <div class="order-num">
                <label id="order-label">Package Number: <b id="order">
                     
                        {{$packageId}}</b></label> 
                    
            </div>



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
                <div class="col-md-6 track-image-box">
                    <div class="kexpress-image-box">
                        <div class="side-img-container">
                            <img class="side-img" src="{{ asset('KExpress_files/group-7.svg')}}" alt="">
                            <img class="courier-icon" src="{{ asset('assets/images/logo/logo-dark.png')}}" width="134px" height="43px" id="courier-logo">
                        </div>
                        <div class="trk-status">
                            <span class="trk-text">Tracking Number</span>
                             
                                <div class="tag-bar">
                                    <span class="tag">{{$status}}</span>
                                </div>
                            
                        </div>
                        <span class="track-no">{{$packageId}}</span>

                        <div>
                            <ul class="trk-text">
                                <li>Name of Sender: {{$package->customerName}}</li>
                                <li>Sender's Address: {{$package->customerAddress}}</li><br>
                                <li>Name of receiver: {{$package->deliveryName}}</li>
                                <li>Email of receiver: {{$package->deliveryEmail}}</li>
                                <li>Number of receiver: {{$package->deliveryNumber}}</li>
                                <li>Address of receiver: {{$package->deliveryAddress}} , {{$package->deliveryState}} {{$package->deliveryCountry}}</li>
                                <li>Total weight of package: {{$package->packageWeight}} kg</li>
                                <li>Number of package: {{$package->packageNumber}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
       
    </div>

@endsection