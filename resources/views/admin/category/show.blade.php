@extends('admin.layout.app')

@section('headSection')

 <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


@endsection

@section('main-content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
          <a class="offset-md-5 btn btn-info" href="{{route('category.create')}}">Add new</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL NO.</th>
                  <th>Category name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>
                  
                <tbody>
                
            @foreach($categories as $category)
                <tr>
                  <td>{{$loop -> index +1}}</td>
                  <td>{{ $category-> name}}</td>
                  <td>{{ $category-> slug}}</td>
                  <td><a href="{{route('category.edit', $category->id)}}"><i class="far fa-edit"></i></a></td>
                  
                  <td>  
                    <form id="delete-form-{{$category->id}}" action="{{route('category.destroy', $category->id)}}" method="POST" ">

                      {{csrf_field()}}
                    {{method_field('DELETE')}}


                    </form>
                    <a href="" onclick="if(confirm('Are you sure, you want to delete that?'))
                    {
                      event.preventDefault();
                       document.getElementById('delete-form-{{$category->id}}').submit();
                    }

                    else{
                      event.preventDefault();
                    }
                    "><i class="fas fa-trash"></i></a>
                  </td>

                 
                </tr>
                @endforeach
                </tbody>
               
                <tfoot>
                <tr>
                  <th>SL NO.</th>
                  <th>Category name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </tfoot>
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


@endsection


@section('footerSection')

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection