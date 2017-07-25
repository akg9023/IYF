@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Centers";
    $page_desc="Add & Remove";
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
		      <h3 class="box-title">Centers Info</h3>
		    </div>
		    <!-- /.box-header -->

		    <div class="box-body">
		      <table id="centers_info" class="table table-bordered table-striped table-hover" style="overflow:auto;	display:block;">
			      <thead>
			      <tr>
			      	<th style="white-space:nowrap;">Serial no.</th>
	                <th style="white-space:nowrap;">Center's name</th>
	                <th>Address</th>
	                <th>City</th>
	                <th>Pincode</th>
	                <th style="white-space:nowrap;"">District</th>
	                <th style="white-space:nowrap;">Postoffice</th>
	                <th style="white-space:nowrap;">State</th>
	                <th>Action</th>
	              </tr>
			      </thead>
			      <tbody>
			      	@foreach(App\Center::all() as $center)
			      		<tr>
			      			<td>{{$center->id}}</td>
			      			<td>{{$center->name}}</td>
			      			<td>{{$center->addr}}</td>
			      			<td>{{$center->city}}</td>
			      			<td>{{$center->pinncode}}</td>
			      			<td>{{$center->district}}</td>
			      			<td>{{$center->postoffice}}</td>
			      			<td>{{$center->state}}</td>
			      			<td style="white-space:nowrap;">
			      			{{--<a class="btn bg-maroon" href="#">Details</a>--}}&nbsp;
			      			<a class="btn btn-success" href="{{asset('/admin/update_center/'.$center->id)}}">Update</a>&nbsp;
			      			<a id="delete{{$center->id}}" class="btn btn-danger" href="{{asset('/admin/delete_center/'.$center->id)}}">Delete</a>
			      			</td>
			      		</tr>
			      	@endforeach
			      </tbody>
		      </table>
		    </div>
		    <!-- /.box-body -->
		    <div class="box-footer">
			    <div class="pull-right">
			    	<a class="btn bg-navy" href="{{asset('/admin/addcenters')}}"><i class="fa fa-plus"></i> Add More Centers </a>
			    	<!-- <a class="btn bg-navy" href="{{asset('/user_info/download/xlsx')}}"><i class="fa fa-download"></i> Download in Excel </a>
			    	&nbsp;&nbsp;<a class="btn bg-orange" href="{{asset('/user_info/download/pdf')}}"><i class="fa fa-download"></i> Download in pdf </a> -->
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
    $("#centers_info").DataTable();
});

$("a[id*='delete']").on('click', function(event){
  // event.stopImmediatePropagation();
  var loc = $(this).attr('href');
  swal({   
    title: "Are you sure?",
    text: "You will not be able to recover this center's data!",         type: "warning",   
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