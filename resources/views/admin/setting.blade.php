@extends('admin.inc.layout')

@section('content')

<div class="ms-content-wrapper">
@php($settings = App\Models\Setting::find(1))

     
      <div class="row">


    
        <div class=" col-xl-12 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">
              <h2 class="section-title">Settings</h2>
              <form method="POST" action="{{route('settings')}}">
                        @csrf

                        <input type="text" name="id" value="{{$settings->id}}" hidden>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{$settings->email}}" name="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-end">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" required value="{{$settings->phoneNumber}}">

                                @error('phoneNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="widget" class="col-md-4 col-form-label text-md-end">Widget</label>

                            <div class="col-md-6">
                               <textarea name="widget" class="form-control @error('widget') is-invalid @enderror" cols="50" rows="20">{{$settings->widget}}</textarea>
                                @error('widget')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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