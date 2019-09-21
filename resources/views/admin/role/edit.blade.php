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
                <h3 class="card-title">Tags</h3>
              </div>

             @include('include.messages')

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('role.update',$role->id) }}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}


                <div class="card-body">
                  <div class="row">
                  <div class="col-lg-6 offset-3">

                     <div class="form-group">

                    <label for="name">Role title</label>
                    <input type="text" name= "name" class="form-control" id="name" value="{{$role->name}}" placeholder="Post tag title name here....">
                  </div>

                       <div class="form-group">
                <div class="row">
                  
                   <div class="col-lg-4">
                    
                    <label for="name">Posts permission</label>
                    
                      
                      <div class="checkbox">
                        @foreach($permissions as $permission)

                        @if($permission->for=='post')
                      <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"


                        @foreach($role->permissions as $permit)

                        @if($permit->id == $permission->id)

                        checked 


                        @endif

                        @endforeach



                        >{{$permission->name}}</label> <br>

                      @endif

                      @endforeach
                      </div>           

                  </div>

                  <div class="col-lg-4">
                    
                    <label>User permission</label>

                    <div class="checkbox">
                        @foreach($permissions as $permission)

                        @if($permission->for=='user')
                      <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"



                        @foreach($role->permissions as $permit)

                        @if($permit->id == $permission->id)

                        checked 


                        @endif

                        @endforeach



                        >{{$permission->name}}</label> <br>

                      @endif

                      @endforeach
                      </div> 
                   

                  </div>


                  <div class="col-lg-4">
                    
                    <label>Other permission</label>

                    <div class="checkbox">
                        @foreach($permissions as $permission)

                        @if($permission->for=='other')
                      <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"


                        @foreach($role->permissions as $permit)

                        @if($permit->id == $permission->id)

                        checked 


                        @endif

                        @endforeach



                        >{{$permission->name}}</label> <br>

                      @endif

                      @endforeach
                      </div> 
                   

                  </div>


                </div>
                 
                    </div>

                </div>
                





                    <div class="col-lg-6 offset-3">
                 

                  <div class="form-group">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{route('role.index')}}" class="btn btn-warning">Back</a>
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