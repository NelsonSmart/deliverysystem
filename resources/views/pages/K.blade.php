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
        <div class="container-fluid main-wrapper">
            
            
                No Tracking Details
                <h5>{{$traknum}}</h5>

                <div class="alert alert-danger">
                    {{$error}}
                </div>
            
        </div>
       
    </div>

@endsection