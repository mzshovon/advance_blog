@extends('admin.layout.app')



@section('main-content')

<br>


<div class="content-wrapper">

<section class="content">


<div class="container-fluid">
        
          <!-- left column -->
          
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new user</h3>
              </div>

             @include('include.messages')

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('user.store') }}" method="post">
                {{csrf_field()}}

                <div class="card-body">
                  <div class="row">
                  <div class="col-lg-6 offset-3">

                     <div class="form-group">

                    <label for="name">User name</label>
                    <input type="text" name= "name" class="form-control" id="name" placeholder="Write user name..." value="{{old('name')}}">
                  </div>
                </div>
                
                    <div class="col-lg-6 offset-3">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name= "email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}">
                  </div>


                  <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="text" name= "phone" class="form-control" id="phone" placeholder="Enter 11 digit mobile number..." value="{{old('phone')}}">
                 
                  
                  
                  
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name= "password" class="form-control" id="password" placeholder="Enter your password" value="{{old('password')}}">
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="password_confirmation">Confirm password</label>
                    <input type="password" name= "password_confirmation" class="form-control" id="password_confirmation" placeholder="confirm your password">
                  </div>

            <div class="form-group">
                    <label for="status">status</label>
                    <br>
                    <label for="checkbox"><input type="checkbox" name="status" value="1" @if(old('status')==1)

                      {{"checked"}}

                      @endif 
                      ></label>
                  </div>

                    <div class="form-group">
                    <label for="role">User Role</label>
                    
                    <div class="row">
                      <div class="col-lg-4">

                      @foreach($roles as $role)

                      <label for="checkbox"><input type="checkbox" name="role[]" value="{{$role->id}}">{{ $role->name }}</label>

                      @endforeach
                    </div>

                    </div>


                </div>

                  <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('user.index')}}" class="btn btn-warning">Back</a>
                </div>

                  </div>

            


                  
                </div>
              </div>
                <!-- /.card-body -->

                
              </form>
            </div>


        <!-- /.col-->
      </div>
  
      <!-- ./row -->
    </section>

  </div>

@endsection