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
              <form role="form" action="{{ route('permission.update',$permission->id) }}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}


                <div class="card-body">
                  <div class="row">
                  <div class="col-lg-6 offset-3">

                     <div class="form-group">

                    <label for="name">Permission</label>
                    <input type="text" name= "name" class="form-control" id="name" value="{{$permission->name}}" placeholder="Write the exact permission....">
                  </div>
                </div>
                
                    <div class="col-lg-6 offset-3">
                 

                  <div class="form-group">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{route('permission.index')}}" class="btn btn-warning">Back</a>
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