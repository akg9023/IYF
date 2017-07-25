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
<link rel="stylesheet" href="{{asset('/bower_components/sweetalert/dist/sweetalert.css')}}">
<!-- <link rel="stylesheet" href="{{asset('/bower_components/sweetalert/themes/twitter/twitter.css')}}"> -->
<div class="container">
<div class="row">
	<div class="col-xs-11 col-md-11 col-sm-11">
		<div class="box">
		    <div class="box-header">
		      <h3 class="box-title">Members Info</h3>
		    </div>
		    <!-- /.box-header -->

		    <!-- ----------Added in main layout---------- -->
		    {{--@if (session('success'))
	            <div class="alert alert-success">
	                {{ session('success') }}
	            </div>
	        @endif
	        @if (session('error'))
	            <div class="alert alert-danger">
	                {{ session('error') }}
	            </div>
	        @endif--}}


		    <div class="box-body">
		      <table id="users_info" class="table table-bordered table-striped table-hover" style="overflow:auto;	display:block;">
			      <thead>
			      <tr>
			      	<th>Id</th>
	                <th>Name</th>
	                <th>Email</th>
	                <th style="white-space:nowrap;">Mobile No.</th>
	                <th>Birthday</th>
	                <th style="white-space:nowrap;"">Is Admin</th>
	                <th style="white-space:nowrap;">Created At</th>
	                <th style="white-space:nowrap;">Updated At</th>
	                <th>Action</th>
	              </tr>
			      </thead>
			      <tbody>
			      	@foreach(App\User::all() as $user)
			      		<tr>
			      			<td>{{$user->id}}</td>
			      			<td>{{$user->firstname}}</td>
			      			<td>{{$user->email}}</td>
			      			<td>{{$user->primary_mobile}}</td>
			      			<td>{{$user->birthday}}</td>
			      			<td>@if($user->is_admin)Yes @else No @endif</td>
			      			<td>{{$user->created_at}}</td>
			      			<td>{{$user->updated_at}}</td>
			      			<td style="white-space:nowrap;">
			      			{{--<a class="btn bg-maroon" href="#">Details</a>--}}&nbsp;
			      			<a class="btn btn-success" href="{{asset('/admin/update_user/'.$user->id)}}">Update</a>&nbsp;
			      			<a id="delete{{$user->id}}" class="btn btn-danger" href="{{asset('/admin/delete_user/'.$user->id)}}">Delete</a>
			      			</td>
			      		</tr>
			      	@endforeach
			      </tbody>
		      </table>
		    </div>
		    <!-- /.box-body -->
		    <div class="box-footer">
			    <div class="pull-right">
			    	<a class="btn bg-navy" href="{{asset('/user_info/download/xlsx')}}"><i class="fa fa-download"></i> Download in Excel </a>
			    	&nbsp;&nbsp;<a class="btn bg-orange" href="{{asset('/user_info/download/pdf')}}"><i class="fa fa-download"></i> Download in pdf </a>
			    </div>
		    </div>
		    <!-- /.box-footer -->
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
<script src="{{asset('/bower_components/sweetalert/dist/sweetalert.min.js')}}"></script>
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

$("a[id*='delete']").on('click', function(event){
  // event.stopImmediatePropagation();
  var loc = $(this).attr('href');
  swal({   
    title: "Are you sure?",
    text: "You will not be able to recover this user's data!",         type: "warning",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!", 
    closeOnConfirm: false 
  }, 
    function(){ 
	  //   swal("Deleted!",
	  // "Your imaginary file has been deleted.",
	  // "success");  
    	window.location.href = loc;//$(this).attr('href');
  });
  return false;
});
</script>
@endpush

