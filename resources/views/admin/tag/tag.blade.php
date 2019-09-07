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

              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('tag.store') }}" method="post">
                {{csrf_field()}}

                <div class="card-body">
                  <div class="row">
                  <div class="col-lg-12 col-lg-offset-4">

                     <div class="form-group">

                    <label for="name">Tag title</label>
                    <input type="text" name= "name" class="form-control" id="name" placeholder="Post tag title name here....">
                  </div>

                
                  
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name= "slug" class="form-control" id="slug" placeholder="Post slug name here....">
                  </div>

                  <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
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