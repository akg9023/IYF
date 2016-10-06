@extends('layouts.admin_template')

@section('initialize')
<?php
	$page_title="Members Details";
	$page_desc="Manage members";
?>
@stop

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
<div class="container">
<div class="row">
	<div class="col-xs-11 col-md-11 col-sm-11">
		<div class="box">
		    <div class="box-header">
		      <h3 class="box-title">Members Info</h3>
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		      <table id="users_info" class="table table-bordered table-striped table-hover">
			      <thead>
			      <tr>
			      	<th>Id</th>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Mobile No.</th>
	                <th>Created At</th>
	                <th>Updated At</th>
	                <th>Action</th>
	              </tr>
			      </thead>
			      <tbody>
			      	@foreach(App\User::all() as $user)
			      		<tr>
			      			<td>{{$user->id}}</td>
			      			<td>{{$user->firstname}}</td>
			      			<td>{{$user->email}}</td>
			      			<td>{{$user->mob1}}</td>
			      			<td>{{$user->created_at}}</td>
			      			<td>{{$user->updated_at}}</td>
			      			<td>
			      			<a class="btn bg-maroon" href="#">Details</a>&nbsp;
			      			<a class="btn btn-success" href="#">Update</a>&nbsp;
			      			<a class="btn btn-danger" href="#">Delete</a>
			      			</td>
			      		</tr>
			      	@endforeach
			      </tbody>
		      </table>
		    </div>
		    <!-- /.box-body -->
		</div>
		  <!-- /.box -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
</div>

@stop

@push('scripts')
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>
$(function() {
    // $('#users_info').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     ajax: '{!! route('admin/edit_database.data') !!}',
    //     columns: [
    //         { "data": 'id', "name": 'id' },
    //         { "data": 'name', "name": 'name' },
    //         { "data": 'email', "name": 'email' },
    //         { "data": 'created_at', "name": 'created_at' },
    //         { "data": 'updated_at', "name": 'updated_at' }
    //     ]
    // });
    $("#users_info").DataTable();
});
</script>
@endpush

