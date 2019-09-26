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
         
          <div class="col-sm-6">
                     </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

@include('include.messages')
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users list</h3>
          <a class="offset-md-5 btn btn-info" href="{{route('user.create')}}">Add new</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL NO.</th>
                  <th>Tag name</th>
                  <th>Phone number</th>
                  <th>Assigned Roles</th>
                  <th>User Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>
                  
                <tbody>
                
            @foreach($users as $user)
                <tr>
                  <td>{{$loop -> index +1}}</td>
                  <td>{{ $user-> name}}</td>
                  <td>{{ $user-> phone}}</td>
                  
                  <td>

                    @foreach($user->roles as $role)

                    {{$role->name}},

                    @endforeach

                  </td>

                  <td>
                    
                    @if($user->status == 1)

                    <button class="btn btn-success btn-xs">{{"Active"}}</button>
                    @else <button class="btn btn-warning btn-xs">{{"Not active"}}</button>

                    @endif

                  </td>
                
                  <td><a href="{{route('user.edit', $user->id)}}"><i class="far fa-edit"></i></a></td>
                  
                  <td>  
                    <form id="delete-form-{{$user->id}}" action="{{route('user.destroy', $user->id)}}" method="POST" ">

                      {{csrf_field()}}
                    {{method_field('DELETE')}}


                    </form>
                    <a href="" onclick="if(confirm('Are you sure, you want to delete that?'))
                    {
                      event.preventDefault();
                       document.getElementById('delete-form-{{$user->id}}').submit();
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
                  <th>user name</th>
                  <th>Phone number</th>
                  <th>Assigned Roles</th>
                  <th>User Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
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