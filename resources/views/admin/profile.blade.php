@extends('admin.inc.layout')

@section('content')

<div class="ms-content-wrapper">
@php($usr = auth()->user())

      <div class="ms-profile-overview">
        <div class="ms-profile-cover">
          <img class="ms-profile-img" src="{{ asset('storage/images/profilesPic/'.$usr->picture)}}" alt="people">
          <div class="ms-profile-user-info">
            <h1 class="ms-profile-username">{{$usr->name}}</h1>
            @if ($usr->isAdmin == true)
              <h2 class="ms-profile-role">Super Admin</h2>
            @else
              <h2 class="ms-profile-role">Admin</h2>
            @endif
            
          </div>
        </div>
       
      </div>

      <div class="row">


        <div class="col-xl-5 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">
              <h2 class="section-title">Basic Information</h2>
              <table class="table ms-profile-information">
                <tbody>
                  <tr>
                    <th scope="row">Full Name</th>
                    <td>{{$usr->name}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Email Address</th>
                    <td>{{$usr->email}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Role</th>
                    @if ($usr->isAdmin == true)
                      <td>Super Admin</td>
                    @else
                      <td>Admin</td>
                    @endif
                  </tr>
                </tbody>
              </table>
              <div class="mt-2 p-3">
                @foreach ($errors as $error)

                {{$error}}
                  
                @endforeach
                <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="file" name="picture" id="" required>

                  <button type="submit" class="btn btn-sm rounded">upload</button>



                </form>
              </div>
            </div>
          </div>
        </div>

    

        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">
              <h2 class="section-title">Change Password</h2>
              <form method="POST" action="{{route('changePasswrd')}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="passwrd" class="col-md-4 col-form-label text-md-end">{{ __('Old Password') }}</label>

                            <div class="col-md-6">
                                <input id="passwrd" type="password" class="form-control @error('passwrd') is-invalid @enderror" name="passwrd" required>

                                @error('passwrd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Change
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
          </div>
        </div>
     

      </div>

    </div>
  
@endsection