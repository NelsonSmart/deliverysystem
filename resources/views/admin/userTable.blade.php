
@php
    $users = App\Models\User::all()->where('isAdmin', false); 
@endphp

<div class="col-xl-12 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Added Users</h6>
            </div>
            <div class="ms-panel-body">

              <div class="table-responsive">
                <table class="table thead-primary">
                  <thead>
                    <tr>
                      
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Delete Account</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user )
                    <tr>
                     
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td><a href="{{url('/adm/user/delete/' . $user->id )}}" class="btn btn-sm btn-danger"> delete </a> </td>
                      
                    </tr>
                      @endforeach
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>