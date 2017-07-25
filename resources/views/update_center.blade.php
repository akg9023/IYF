@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Center";
    $page_desc="Update details";
?>
@stop

@section('content')

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type='text/javascript' src="{{asset('/js/register_page.js')}}"></script>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-sm-11  col-xs-10">

		    <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/update_center') }}" enctype="multipart/form-data">
		        {{ csrf_field() }}

		        <!--tabs  -->
		        <!-- <ul class="nav nav-pills">
		            <li class="active treeview"><a href="#Basic" data-toggle="tab">Basic</a></li>
		            <li><a href="#College" data-toggle="tab">College</a></li>
		            <li><a href="#Staying" data-toggle="tab">Address/Staying </a></li>
		            <li><a href="#Final" data-toggle="tab">Final Step</a></li>
		        </ul> -->
                <input type="hidden" value="{{$center->id}}" name="id" />
		        <!-- Basic Expandable  -->
		        <div class="box box-success">
		            <div class="box-header with-border">
		              <h3 class="box-title">Update Center Details</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		              <!-- /.box-tools -->
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body" style="display:block;">
		                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		                    <label for="name" class="col-md-4 control-label">Name</label>

	                        <div class="col-md-6">
	                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name')?old('name'):$center->name }}" placeholder="Center name">

	                            @if ($errors->has('name'))
	                                <span class="help-block">
	                                    <strong>{{ $errors->first('name') }}</strong>
	                                </span>
	                            @endif
	                        </div>
		                </div>

		                <!-- ------no_of_members-------- -->
		                <div class= "form-group{{ $errors->has('no_of_members') ? ' has-error' : '' }}">
		                    <label for="no_of_members" class="col-md-4 control-label">No_of_members</label>

	                        <div class="col-md-6">
	                            <input id="no_of_members" type="number" class="form-control" name="no_of_members" value="{{ old('no_of_members')?old('no_of_members'):$center->no_of_members}}" placeholder="No_of_members">
	                            
	                            @if ($errors->has('no_of_members'))
	                                <span class="help-block">
	                                    <strong>{{ $errors->first('no_of_members') }}</strong>
	                                </span>
	                            @endif
	                        </div>

		                </div>    
		                <!-- --------------------------- -->
		                
		                <!-- Description -->
		                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

                            <label for="addr" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" rows="6" class="form-control" name="description" placeholder="{!! old('description')? old('description'):$center->description . '&#13;&#10;Please write sonething about the center' !!}"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

		                <!-- Address -->
		                <fieldset>
                            <div class="form-group{{ $errors->has('addr') ? ' has-error' : '' }}">

                                <label for="c_addr" class="col-md-4 control-label">Center Address</label>

                                <div class="col-md-6">
                                    <textarea id="c_addr" rows="3" class="form-control" name="addr" placeholder="{!! old('addr')? old('addr'):$center->addr!!}"></textarea>

                                    @if ($errors->has('addr'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('addr') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">

                                <div class="col-md-6 col-md-offset-4">
                                    <input id="c_city" type="text" class="form-control" name="city" value="{{ old('city')?old('city'):$center->city }}" placeholder="City/Village">

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }} form-group{{ $errors->has('postoffice') ? ' has-error' : '' }}">
                                
                                <div class="col-md-3 col-md-offset-4">
                                    <input id="c_pincode" type="number" class="form-control" name="pincode" value="{{ old('pincode')?old('pincode'):$center->pincode}}" placeholder="Pincode">                         
                                </div>

                                <div class="col-md-3">
                                     <select id="c_postoffice" type="text" class="form-control" name="postoffice" onfocus="select_option(this.id,&apos;{{ old('postoffice')?old('postoffice'):$center->postoffice }}&apos;)" placeholder="Post Office" style="color: #999;">
                                         <option value=" " disabled hidden selected>Select Post Office</option>
                                     </select>
                                </div>

                                <div class="col-md-10">
                                    @if ($errors->has('pincode'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pincode') }}</strong>
                                        </span>
                                    @endif

                                    @if ($errors->has('postoffice'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('postoffice') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }} form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                                <div class="col-md-3 col-md-offset-4">
                                    <input id="c_district" type="text" class="form-control" name="district" value="{{ old('district')?old('district'):$center->district}}" placeholder="District" readonly>      
                                </div>

                                <div class="col-md-3">
                                   <input id="c_state" type="text" class="form-control" name="state" value="{{ old('state')?old('state'):$center->state}}" placeholder="State" readonly>
                                </div>

                                <div class="col-md-10">

                                    @if ($errors->has('district'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('district') }}</strong>
                                        </span>
                                    @endif

                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </fieldset>

                        <!-- photos -->
                        <div class="container-fluid">

                            <label for="profile_pic" class="col-md-4 control-label">College Logo</label>
                            <div class="image">
                                <img src="{{url('/center/'.$center->id.'/college_logo')}}" alt="College Logo">
                            </div>
                        </div>

                        <div class="container-fluid">

                            <label for="college_logo" class="col-md-4 control-label">Change College Logo</label>
                            <div class="col-md-6"> 
                            <!-- style="position:relative; top:10px" -->
                                <input id="college_logo" type="file" name="college_logo" accept="image/*">
                            </div>
                        </div>

                        <div class="container-fluid">

                            <label for="profile_pic" class="col-md-4 control-label">Center Image</label>
                            <div class="image">
                                <img src="{{url('/center/'.$center->id.'/center_img')}}" alt="User Image">
                            </div>
                        </div>

                        <div class="container-fluid">

                            <label for="center_img" class="col-md-4 control-label">Change Center Image</label>
                            <div class="col-md-6" style="position:relative; top:10px">
                                <input id="center_img" type="file" name="center_img" accept="image/*">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary pull-right">
	                        <i class="fa fa-btn fa-bank"></i> Update
		                </button>

		            </div>
		            <!-- /.box-body -->
		        </div>
		        <!-- /Basic Expandabe -->
		         
		    </form>
		</div>
	</div>
</div>

@endsection