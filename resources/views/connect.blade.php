@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Connect Your Family";
    $page_desc="Make your family spiritualised";
?>
@stop

<!--
<ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a></li>



 <div class="container">
  <h3>Inline List</h3>
  <ul class="list-inline">
    <li><a href="#">Basic</a></li>
    <li><a href="#">College</a></li>
    <li><a href="#">Staying </a></li>
    <li><a href="#">Upload Pic</a></li>
  </ul>
</div>
 -->

@section('content')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type='text/javascript' src="{{asset('/js/register_page.js')}}"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8  col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Connecting Family</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/#') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <!-- family generation -->
                        <div id="generation">

                            <div class="container-fluid">
                        
                                <label class="control-label">Generation</label>

                                <div class="col-md-8">
                                    <label class="radio-inline control-label">
                                        <input type="radio" class="1st" name="gen" value="Hostel" checked> 1st Gen(Grand)
                                    </label>
                                
                                    <label class="radio-inline"> 
                                        <input type="radio" class="2nd" name="gen" value="Mess"> 2nd Gen(Fa/Mo)
                                    </label>
                                    
                                    <label class="radio-inline">
                                        <input type="radio" class="3rd" name="gen" value="Voice"> 3rd Gen(Bro/Sis)
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" class="4th" name="gen" value="Voice"> 4th Gen(Child)
                                    </label>
                                </div>

                            </div>
                            <!-- contents of radio -->
                        </div>

                        <!--tabs  -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#Basic" data-toggle="tab">Basic</a></li>
                            <li class="collapse 3rd 4th"><a href="#College" data-toggle="tab">College</a></li>
                            <li><a href="#Staying" data-toggle="tab">Address/Staying </a></li>
                            <li><a href="#Final" data-toggle="tab">Final Step</a></li>
                        </ul>

                        <!--  -->
                        <div class="tab-content">
                            <!-- tab Basic -->
                            <div class="tab-pane active" id="Basic" style="position:relative; top:10px">
                                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }} form-group{{ $errors->has('firstname') ? ' has-error' : '' }} form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <fieldset>
                                        <div class="col-md-3 inline-fluid">
                                            <input id="name" type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="Surname">

                                            @if ($errors->has('surname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 inline-fluid">
                                            <input id="name" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="First Name">

                                            @if ($errors->has('firstname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 inline-fluid">
                                            <input id="name" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name">

                                            @if ($errors->has('lastname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- ------Mobile_No-------- -->
                                <div class= "form-group{{ $errors->has('mob1') ? ' has-error' : '' }} form-group{{ $errors->has('mob2') ? ' has-error' : '' }}">
                                    <label for="Mobile_No" class="col-md-4 control-label">Mobile No.</label>

                                    <fieldset>
                                        <div class="col-md-5 inline-fluid">
                                            <input id="Mobile_No" type="number" class="form-control" name="mob1" value="{{ old('mob1') }}" placeholder="Mobile No.(1)">
                                            @if ($errors->has('mob1'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mob1') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-4 inline-fluid ">
                                            <input id="Mobile_No" type="number" class="form-control" name="mob2" value="{{ old('mob2') }}"" placeholder="Mobile No.(2)">

                                            @if ($errors->has('mob2'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mob2') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </fieldset>
                                </div>    
                                <!-- --------------------------- -->


                                <!-- -------What’sApp----------- -->
                                <div class="form-group{{ $errors->has('whatsapp') ? ' has-error' : '' }}">
                                    <label for="What'sApp_no" class="col-md-4 control-label">What’sApp No.</label>

                                    <div class="col-md-6">
                                        <input id="What’sApp_no" type="number" class="form-control" name="whatsapp" value="{{ old('whatsapp') }}">

                                        @if ($errors->has('whatsapp'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('whatsapp') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>   
                                <!-- --------------------------- -->
                                <!-- -------Facebook Email----------- -->
                                <div class="form-group{{ $errors->has('fb_email') ? ' has-error' : '' }}">
                                    <label for="fb_email" class="col-md-4 control-label">Facebook E-mail</label>

                                    <div class="col-md-6">
                                        <input id="fb_email" type="email" class="form-control" name="fb_email" value="{{ old('fb_email') }}">

                                        @if ($errors->has('fb_email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('fb_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>   
                                <!-- .......................- -->
                                
                                <!-- ...........-D.O.B...........- -->
                                <div class="form-group{{ $errors->has('bdate') ? ' has-error' : '' }}">
                                    <label for="bdate" class="col-md-4 control-label">Birthday</label>

                                    <div class="col-md-6">
                                        <input id="bdate" type="date" class="form-control" name="bdate" value="{{ old('bdate') }}">

                                        @if ($errors->has('bdate'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bdate') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>    
                                <!-- .......D.O.B end.... -->
                                <!-- next -->
                                <ul class="pager wizard">
                                <!-- <li class="previous"><a class="btnPrevious">Previous</a></li> -->
                                <li class="next"><a class="btnNext">Next</a></li>
                            </ul>

                                <!-- end basic next -->
                            </div> 
                            <!-- tab Basic end-->
                            
                            <!-- new tab college -->
                            <div class="tab-pane" id="College" style="position:relative; top:10px">
                                <!-- College Name -->
                                <div class="form-group{{ $errors->has('college_name') ? ' has-error' : '' }}">
                                    <label for="college_name" class="col-md-4 control-label">College Name</label>

                                    <div class="col-md-6">
                                        <input id="college_name" type="text" class="form-control" name="college_name" value="{{ old('college_name') }}">

                                        @if ($errors->has('college_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('college_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- College Name end-->

                                <!-- period  -->
                                <div class="form-group{{ $errors->has('period_from') ? ' has-error' : '' }} form-group{{ $errors->has('period_to') ? ' has-error' : '' }}">
                                    <label for="period" class="col-md-4 control-label">Period</label>
                                    <div class="col-md-3">
                                       
                                        {{Form::selectYear('period_from',1970,date("Y"),'From', ['class' => "form-control",'placeholder'=>'From','id'=>'period'])}}

                                        @if ($errors->has('period_from'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('period_from') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                       
                                        {{Form::selectYear('period_to',1973,date("Y")+6,'To', ['class' => "form-control",'placeholder'=>'To','id'=>'period'])}}

                                        @if ($errors->has('period_to'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('period_to') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- period END -->

                                <!-- College Roll No  -->
                                <div id="cur_roll" class="form-group{{ $errors->has('roll_no') ? ' has-error' : '' }}">
                                    <label for="roll_No" class="col-md-4 control-label">Roll No.</label>

                                    <div class="col-md-6">
                                        <input id="roll_No" type="number" class="form-control" name="roll_no" value="{{ old('roll_no') }}">

                                        @if ($errors->has('roll_no'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('roll_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>   
                                <!-- College Roll No END -->

                                <!-- Course and Department -->
                                <div id="cur_course" class="form-group{{ $errors->has('course') ? ' has-error' : '' }} form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                                    <label for="course" class="col-md-4 control-label">Course</label>
                                    <div class="col-md-2">
                                        <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}">

                                        @if ($errors->has('course'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('course') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <label for="department" class="col-md-1 control-label">Dept</label>
                                    <div class="col-md-3">
                                        <input id="department" type="text" class="form-control" name="department" value="{{ old('department') }}">

                                        @if ($errors->has('department'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('department') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- dept END -->
                                
                                <!-- next -->
                                 <ul class="pager wizard">
                                    <li class="previous"><a class="btnPrevious">Previous</a></li>
                                    <li class="next"><a class="btnNext">Next</a></li>
                                </ul>       

                                <!-- end  college next -->
                            </div>
                            <!-- new tab college end -->                        

                            <!-- tab Staying -->
                            <div class="tab-pane" id="Staying" style="position:relative; top:10px">
                               <!-- residence -->
                                <!-- <h3>Residence</h3> -->
                                <!-- Radio Buttons for selection -->
                                <div class="form-group{{ $errors->has('per_addr') ? ' has-error' : '' }}">
                                    <label for="per_addr" class="col-md-4 control-label">Permanent Address</label>

                                    <div class="col-md-6">
                                        <textarea id="per_addr" row="3" class="form-control" name="per_addr" value="{{ old('per_addr') }}"></textarea>

                                        @if ($errors->has('per_addr'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('per_addr') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('per_pin') ? ' has-error' : '' }} form-group{{  $errors->has('per_city') ? ' has-error' : '' }} form-group{{ $errors->has('per_state') ? ' has-error' : '' }}">
                                    
                                    <div class="col-md-3 col-md-offset-4">
                                        <input id="per_pin" type="text" class="form-control" name="per_pin" value="{{ old('per_pin') }}" placeholder="Pincode">

                                        @if ($errors->has('per_pin'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('per_pin') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <input id="per_state" type="text" class="form-control" name="per_state" value="{{ old('per_state') }}" placeholder="State">

                                        @if ($errors->has('per_state'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('per_state') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                </div>
                                <div class="form-group{{ $errors->has('per_city') ? ' has-error' : '' }} form-group{{ $errors->has('per_postoffice') ? ' has-error' : '' }}">
                                    <div class="col-md-3 col-md-offset-4">
                                        <input id="per_city" type="text" class="form-control" name="per_city" value="{{ old('per_city') }}" placeholder="City/Town">

                                        @if ($errors->has('per_city'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('per_city') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-3">
                                        <input id="per_postoffice" type="text" class="form-control" name="per_postoffice" value="{{ old('per_postoffice') }}" placeholder="Post Office">

                                        @if ($errors->has('per_postoffice'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('per_postoffice') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="status" class="col-md-4 control-label">Your current status</label>

                                    <div class="col-md-6">
                                        {{Form::select('2',array('passout'=>'Passout','current'=>'Currently Studying'),'current',['class'=>'form-control','id' => 'status'])}}

                                        @if ($errors->has('status'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div id="current">

                                    <div class="container-fluid">
                                
                                        <label class="col-md-4 control-label">Staying at</label>

                                        <div class="col-md-6">
                                            <label class="radio-inline control-label">
                                                <input type="radio" class="hostel" name="residence" value="Hostel" checked> Hostel
                                            </label>
                                        
                                            <label class="radio-inline"> 
                                                <input type="radio" class="mess" name="residence" value="Mess"> Mess
                                            </label>
                                            
                                            <label class="radio-inline">
                                                <input type="radio" class="voice" name="residence" value="Voice"> Voice
                                            </label>
                                        </div>

                                    </div>
                                    <!-- contents of radio -->

                                    <div class="container-fluid" style="position:relative; top:10px">
                                    <!-- HOSTEL FORM -->
                                        <div class="collapse hostel" style="display:block;">
                                            <!-- hostel name -->
                                            <div class="form-group{{ $errors->has('hostel') ? ' has-error' : '' }}">
                                                <label for="hostel" class="col-md-4 control-label">Hostel Name</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="hostel" value="{{old('hostel')}}">

                                                    @if ($errors->has('hostel'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('hostel') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- hostel name END -->
                                            <!-- Room no. -->
                                            <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }}">
                                                <label for="room_no" class="col-md-4 control-label">Room No.</label>
                                                <div class="col-md-6">
                                                    <input id="room_no" type="text" class="form-control" name="room_no" value="{{ old('room_no') }}">

                                                    @if ($errors->has('room_no'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('room_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- room no. END -->
                                        </div>
                                    <!-- MESS FORM -->  
                                        <div class="collapse mess">
                                            <!--mess address -->
                                            <div class="form-group{{ $errors->has('mess_addr') ? ' has-error' : '' }}">
                                                <label for="mess_addr" class="col-md-4 control-label">Mess Address</label>
                                                <div class="col-md-6">
                                                    <textarea id='mess_addr' class="form-control" row="4" name="mess_addr"> {{ old('mess_addr') }}</textarea>

                                                    @if ($errors->has('mess_addr'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('mess_addr') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- mess address END -->
                                        </div>
                                    <!-- VOICE FORM -->
                                        <div class="collapse voice">
                                            <!-- voice name -->
                                            <div class="form-group{{ $errors->has('voice') ? ' has-error' : '' }}">
                                                <label for="voice" class="col-md-4 control-label">Voice Name</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="hostel" value="{{old('voice')}}">
                                                        <option>Rameswaram Voice</option>
                                                        <option>Puri Voice</option>
                                                        <option>Haridwar Voice</option>
                                                        <option>Alipore Voice</option>
                                                        <option>Others</option>
                                                    </select>
                                                    @if ($errors->has('voice'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('voice') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- dept END -->
                                        </div>
                                    </div>
                                </div>
                            <!-- .....Passout user form.......... -->
                                <div id="passout" hidden>

                                    <div class="form-group{{ $errors->has('cur_addr') ? ' has-error' : '' }}">
                                        <label for="cur_addr" class="col-md-4 control-label">Current Address</label>

                                        <div class="col-md-6">
                                            <textarea id="cur_addr" row="3" class="form-control" name="cur_addr" value="{{ old('cur_addr') }}"></textarea>

                                            @if ($errors->has('cur_addr'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cur_addr') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('cur_pin') ? ' has-error' : '' }} form-group{{ $errors->has('cur_state') ? ' has-error' : '' }}">
                                        
                                        <div class="col-md-3 col-md-offset-4">
                                            <input id="cur_pin" type="text" class="form-control" name="cur_pin" value="{{ old('cur_pin') }}" placeholder="Pincode">

                                            @if ($errors->has('cur_pin'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cur_pin') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <input id="cur_state" type="text" class="form-control" name="cur_state" value="{{ old('cur_state') }}" placeholder="State">

                                            @if ($errors->has('cur_state'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cur_state') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                    </div>
                                    <div class="form-group{{ $errors->has('per_city') ? ' has-error' : '' }} form-group{{ $errors->has('per_postoffice') ? ' has-error' : '' }}">
                                        <div class="col-md-3 col-md-offset-4">
                                            <input id="cur_city" type="text" class="form-control" name="cur_city" value="{{ old('cur_city') }}" placeholder="City">

                                            @if ($errors->has('cur_city'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cur_city') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-3">
                                            <input id="cur_postoffice" type="text" class="form-control" name="cur_postoffice" value="{{ old('cur_postoffice') }}" placeholder="Post Office">

                                            @if ($errors->has('cur_postoffice'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cur_postoffice') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('off_name') ? ' has-error' : '' }} form-group{{ $errors->has('off_designation') ? ' has-error' : '' }}">
                                        <label for="off_det" class="col-md-4 control-label">Company Details</label>

                                        <div class="col-md-3">
                                            <input id="off_det" type="text" class="form-control" name="off_name" value="{{ old('off_name') }}" placeholder="Company Name">

                                            @if ($errors->has('off_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('off_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-3">
                                            <input id="off_det" type="text" class="form-control" name="off_designation" value="{{ old('off_designation') }}" placeholder="Designation">

                                            @if ($errors->has('off_designation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('off_designation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('off_addr') ? ' has-error' : '' }}">
                                        <label for="off_addr" class="col-md-4 control-label">Office Address</label>

                                        <div class="col-md-6">
                                            <textarea id="off_addr" row="3" class="form-control" name="off_addr" value="{{ old('off_addr') }}"></textarea>

                                            @if ($errors->has('off_addr'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('off_addr') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('off_pin') ? ' has-error' : '' }} form-group{{ $errors->has('off_state') ? ' has-error' : '' }}">
                                        
                                        <div class="col-md-3 col-md-offset-4">
                                            <input id="off_pin" type="text" class="form-control" name="off_pin" value="{{ old('off_pin') }}" placeholder="Pincode">

                                            @if ($errors->has('off_pin'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('off_pin') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <input id="off_state" type="text" class="form-control" name="off_state" value="{{ old('off_state') }}" placeholder="State">

                                            @if ($errors->has('off_state'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('off_state') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{  $errors->has('off_city') ? ' has-error' : '' }} form-group{{ $errors->has('off_postoffice') ? ' has-error' : '' }}">
                                        <div class="col-md-3 col-md-offset-4">
                                            <input id="off_city" type="text" class="form-control" name="off_city" value="{{ old('off_city') }}" placeholder="City">

                                            @if ($errors->has('off_postofficeity'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('off_city') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-3">
                                            <input id="off_postoffice" type="text" class="form-control" name="off_postoffice" value="{{ old('off_postoffice') }}" placeholder="Post Office">

                                            @if ($errors->has('off_postoffice'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('off_postoffice') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <label for="mail_det" class="col-md-4 control-label">Mailing Address</label>

                                        <div class="col-md-6" style="overflow-x:auto;">
                                            <table id="mail_det" class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="font-size:130%;"><sub>For</sub>\<sup>To</sup></th>
                                                    <th class="text-center">Current Address</th>
                                                    <th class="text-center">Permanent Address</th>
                                                    <th class="text-center">Office Address</th>
                                                    <th class="text-center">Ask First</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="font-size:90%;">Address on 8OG</th>
                                                    <td class="text-center"><input type="radio" name="80G" value="CA"></td>
                                                    <td class="text-center"><input type="radio" name="80G" value="PA"></td>
                                                    <td class="text-center"><input type="radio" name="80G" value="OA"></td>
                                                    <td class="text-center"><input type="radio" name="80G" value="ask"></td>
                                                </tr>

                                                <tr>
                                                    <th>BTG</th>
                                                    <td class="text-center"><input type="radio" name="BTG" value="CA"></td>
                                                    <td class="text-center"><input type="radio" name="BTG" value="PA"></td>
                                                    <td class="text-center"><input type="radio" name="BTG" value="OA"></td>
                                                    <td class="text-center"><input type="radio" name="BTG" value="ask"></td>
                                                </tr>

                                                <tr>
                                                    <th style="font-size:90%;">Birthday gifts</th>
                                                    <td class="text-center"><input type="radio" name="b_gift" value="CA"></td>
                                                    <td class="text-center"><input type="radio" name="b_gift" value="PA"></td>
                                                    <td class="text-center"><input type="radio" name="b_gift" value="OA"></td>
                                                    <td class="text-center"><input type="radio" name="b_gift" value="ask"></td>
                                                </tr>

                                                <tr>
                                                    <th style="font-size:90%;">Festival gifts</th>
                                                    <td class="text-center"><input type="radio" name="f_gift" value="CA"></td>
                                                    <td class="text-center"><input type="radio" name="f_gift" value="PA"></td>
                                                    <td class="text-center"><input type="radio" name="f_gift" value="OA"></td>
                                                    <td class="text-center"><input type="radio" name="f_gift" value="ask"></td>
                                                </tr>
                                            </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                                    <ul class="pager wizard">
                                        <li class="previous"><a class="btnPrevious">Previous</a></li>
                                        <li class="next"><a class="btnNext">Next</a></li>
                            </div>
                            <!-- tab Staying END---->
                            
                            <!--tab final -->
                            <div action="demo_form.asp" class="tab-pane" id="Final" style="position:relative; top:10px">
                                <p class="text-aqua">Thanks for comming till here! Now just the last few formalities are left...</p>

                                <!-- Connected to center -->
                                <div class="form-group{{ $errors->has('connected_center') ? ' has-error' : '' }}">
                                    <label for="connected_center" class="col-md-4 control-label">Conected to Center</label>

                                    <div class="col-md-6">
                                        <input id="connected_center" type="text" class="form-control" name="connected_center" value="{{ old('connected_center') }}">

                                        @if ($errors->has('connected_center'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('connected_center') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Connected center ends -->
                                <!-- Connected to devotee -->
                                <div class="form-group{{ $errors->has('connected_devotee') ? ' has-error' : '' }}">
                                    <label for="connected_devotee" class="col-md-4 control-label">Conected to Devotee</label>

                                    <div class="col-md-6">
                                        <input id="connected_devotee" type="text" class="form-control" name="connected_devotee" value="{{ old('connected_devotee') }}" placeholder="To whom you are connected to?">

                                        @if ($errors->has('connected_devotee'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('connected_devotee') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Connected to devotee ends here -->
                                <!-- Password -->
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Choose your Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Password ends here -->
                               <!-- upload -->
                               <div class="container-fluid">

                                    <label for="image" class="col-md-4 control-label">Upload your pic</label>
                                    <div class="col-md-6">
                                        <input id="image" type="file" name="image" accept="image/*">
                                    </div>
                                </div>

                                <ul class="pager wizard">
                                    <li class="previous"><a class="btnPrevious">Previous</a></li>
                                    <!-- <li class="next"><a class="btnNext">Next</a></li> -->
                                    <li class="next pull-right"><button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Register
                                    </button></li>
                                </ul>

                            </div>
                            <!-- tab pic END---->
                        </div>                           
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection