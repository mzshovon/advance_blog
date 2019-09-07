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
                <h3 class="card-title">Categories</h3>
              </div>

             @include('include.messages')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="row">
                  <div class="col-lg-6 offset-3">

                     <div class="form-group">

                    <label for="name">Category title</label>
                    <input type="text" name= "name" class="form-control" id="name" placeholder="Post category title name here....">
                  </div>

                </div>

                <div class="col-lg-6 offset-3">
                  
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name= "slug" class="form-control" id="slug" placeholder="Post slug name here....">
                  </div>


                  <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>

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