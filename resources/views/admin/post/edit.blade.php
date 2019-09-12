@extends('admin.layout.app')



@section('headSection')
<link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
 <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">

@endsection


@section('main-content')


<div class="content-wrapper">






<section class="content">







      <div class="row">


<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Titles</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
@include('include.messages')

              <form role="form" action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                  <div class="row">
                  <div class="col-lg-6">

                     <div class="form-group">

                    <label for="title_name">Title name</label>
                    <input type="text" name= "title" class="form-control" id="title_name" value="{{$post->title}}" placeholder="Post title name here....">
                  </div>

                  <div class="form-group">
                    <label for="subtitle">Sub-title</label>
                    <input type="text" name= "subtitle" class="form-control" id="subtitle" value="{{$post->subtitle}}" placeholder="Post subtitle name here....">
                  </div>
                  
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name= "slug" class="form-control" id="slug" value="{{$post->slug}}" placeholder="Post slug name here....">
                  </div>

                  </div>

                 <div class="col-lg-6">

                   <div class="form-group">
                    <div class="pull" style="float: right;">
                      <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="iamge">Choose file</label>
                      </div>
                      
                    </div>
                    </div>
                    <div style="float: left; margin-top: 35px;">
                      
                      <div class="form-check">
                    <input type="checkbox" class="status" name="status" id="status" value="1" @if($post->status==1) {{"checked"}} @endif>
                    <label class="form-check-label" for="exampleCheck1">publish</label>
                  </div>

                    </div>
                    
                    
                  </div>

                  <br>
                  <br>
                  <br>
                <div class="form-group">
                  <label>Select Tags</label>
                  <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select tags" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="tags[]">
                    
                   @foreach($tags as $tag)

                   <option data-select2-id="13" value="{{$tag->id}}" 


                       @foreach($post->tags as $postTag)
                    @if($postTag->id == $tag->id) 

                        selected
                   
                   @endif

                    @endforeach

                    >
                    

                   

                     {{$tag->name}}
                  </option>

                   @endforeach
                  </select>
                </div>


           
               <div class="form-group">
                  <label>Select Categories</label>
                  <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select categories" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="categories[]">
                    
                    @foreach($categories as $category)

                   <option data-select2-id="13" value="{{$category->id}}"


                     @foreach($post->categories as $postCategory)
                    @if($postCategory->id == $category->id) 

                        selected
                   
                   @endif

                    @endforeach



                    >{{$category->name}}</option>

                   @endforeach
                 
                  </select>
                </div>


                </div>

            


      <div class="col-lg-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Write here to post as Blog
              
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus" style="color: blue;"></i></button>
               
              </div>
              <!-- /. tools -->
            </div>



            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea"  placeholder="Place some text here"
                         name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$post->body}}</textarea>
              </div>
              
            </div>
          </div>
        </div>


                  
                </div>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>
            </div>


  
        <!-- /.col-->
      </div>
    </div>
      <!-- ./row -->
    </section>

  </div>

    @endsection

@section('footerSection')
   



<!-- Select2 -->
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->


<script>
  

 $(document).ready(function () {

  

    
    $('.select2').select2();


    $('.select2').select2();

  });
</script>

@endsection
 

